<?php

namespace App\Http\Controllers;

use App\User;

use App\Models\Order;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Wallet;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\StudentEnrollment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Library\SslCommerz\SslCommerzNotification;

class CheckoutController extends Controller
{
    public function ProceedToCheckout()
    {
        return view('frontend.pages.checkout');
    }

    public function order(Request $request)
    {
        // Ensure user is authenticated
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Please log in or complete registration to place an order.');
        }

        $request->validate(
            [
                'studentsName' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'division' => 'required|string|max:255',
                'address' => 'required',
                'country' => 'required|string|max:255',
            ],
            [
                'studentsName.required' => 'Student Name is required',
                'city.required' => 'City is required',
                'division.required' => 'Division is required',
                'address.required' => 'Address is required',
                'country.required' => 'Country is required',
            ],
        );

        // Get cart items from session
        $cart = Session::get('cart', []);

        // Check if the cart is not empty
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // try {
        //     DB::beginTransaction();

        // Initialize totals
        $total = 0;
        $discountTotal = 0;

        foreach ($cart as $cartItem) {
            $course = Course::findOrFail($cartItem['course_id']);

            // Check if student already exists by user ID
            $existStudent = Student::where('user_id', auth()->user()->id)->first();
            if (!$existStudent) {
                $student = Student::create([
                    'studentsName' => $request->studentsName,
                    'course_id' => $course->id,
                    'user_id' => auth()->user()->id,
                    'address' => $request->address,
                    'city' => $request->city,
                    'division' => $request->division,
                    'country' => $request->country,
                    'status' => 'Active',
                    'payment_status' => 'Due',
                ]);
            } else {
                $student = $existStudent;
            }

            $referralCode = Session::get('referral_code');
            $referrer = $student->user_id;

            $discountedPrice = $cartItem['discounted_price'];
            $subtotal = $cartItem['price'] * $cartItem['quantity'];

            if ($referralCode) {
                $referrerEnrollment = StudentEnrollment::where('referral_code', $referralCode)->first();
                if ($referrerEnrollment) {
                    $referrer = Student::find($referrerEnrollment->student_id);

                    if ($referrer) {
                        // Ensure wallet exists and add points
                        $wallet = Wallet::where('user_id', $referrer->user_id)->first();
                        if ($wallet) {
                            $wallet->addPoints(500);
                        } else {
                            // Handle the case where the wallet does not exist
                            Wallet::create([
                                'user_id' => $referrer->user_id,
                                'student_id' => $student->id,
                                'balance' => 0,
                                'points' => 500,
                                'status' => 'Pending',
                            ]);
                        }
                    }

                    // Apply discounted price from cartItem
                    $discountedPrice = $cartItem['discounted_price'];
                    $subtotal = $discountedPrice * $cartItem['quantity'];
                    $discountTotal += $subtotal;
                }
            }

            $total += $subtotal;

            $orderData = [
                'course_id' => $course->id,
                'student_id' => $student->id,
                'price' => $cartItem['price'],
                'discounted_price' => $discountedPrice,
                'subtotal' => $subtotal,
                'total' => $total,
                'status' => 'Pending',
                'quantity' => $cartItem['quantity'],
            ];

            $order = Order::create($orderData);

            $enrollmentData = [
                'student_id' => $student->id,
                'course_id' => $course->id,
                'referrer_id' => $referrer,
                'referral_code' => StudentEnrollment::generateReferralCode(),
            ];

            $enrollment = StudentEnrollment::create($enrollmentData);

            $studentID = Carbon::now()->format('ymd') . $student->id;

            Enroll::create([
                'student_enrol_id' => $enrollment->id,
                'country' => $request->country,
                'state' => $request->division,
                'mobile_no' => auth()->user()->contactNumber,
                'email' => auth()->user()->emailAddress,
                'current_address' => auth()->user()->presentAddress,
                'studentID' => $studentID,
            ]);
        }

        // Clear the cart and referral code session
        Session::forget('cart');
        Session::forget('referral_code');

        DB::commit();
        return redirect()->route('index')->with('success', 'Order placed successfully!');
        // } catch (\Exception $exp) {
        //     DB::rollBack();
        //     return redirect()->back()->with('error', 'Something went wrong!');
        // }
    }
}
