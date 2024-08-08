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
use App\Http\Requests\Registration\CreateRequest;
use App\Library\SslCommerz\SslCommerzNotification;

class CheckoutController extends Controller
{
    public function ProceedToCheckout()
    {
        return view('frontend.pages.checkout');
    }

    public function order(Request $request)
    {
        // Validate the request inputs
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
    
        // Initialize the $userId variable
        $userId = null;
    
        DB::beginTransaction();
    
        try {
            // Check if the user is authenticated
            if (auth()->check()) {
                $userId = auth()->user()->id;
            } else {
                // If user is not authenticated, create a new User
                $users = new User();
                $users->applicantName = $request->input('applicantName');
                $users->fatherName = $request->input('fatherName');
                $users->fatherOccupation = $request->input('fatherOccupation');
                $users->motherName = $request->input('motherName');
                $users->motherOccupation = $request->input('motherOccupation');
                $users->nationalId = $request->input('nationalId');
                $users->occupation = $request->input('occupation');
                $users->education = $request->input('education');
                $users->presentAddress = $request->input('presentAddress');
                $users->permanentAddress = $request->input('permanentAddress');
                $users->contactNumber = $request->input('contactNumber');
                $users->emailAddress = $request->input('emailAddress');
                $users->dob = $request->input('dob');
                $users->registrationNumber = $request->input('registrationNumber');
                $users->race = $request->input('race');
                $users->gender = $request->input('gender');
                $users->courseDay = $request->input('courseDay');
                $users->courseTime = $request->input('courseTime');
                if ($request->hasfile('image')) {
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('uploaded_files/users/', $filename);
                    $users->image = $filename;
                }
                $users->save();
                $userId = $users->id;
            }
    
            // Get cart items from session
            $cart = Session::get('cart', []);
            if (empty($cart)) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }
    
            // Initialize totals
            $total = 0;
    
            foreach ($cart as $cartItem) {
                $course = Course::findOrFail($cartItem['course_id']);
    
                $existStudents = Student::where('user_id', $userId)->first();
                if ($existStudents == null) {
                    $student = Student::create([
                        'studentsName' => $request->studentsName,
                        'course_id' => $course->id,
                        'user_id' => $userId,
                        'address' => $request->address,
                        'city' => $request->city,
                        'division' => $request->division,
                        'country' => $request->country,
                        'status' => 'Active',
                        'payment_status' => 'Due',
                    ]);
                } else {
                    $student = $existStudents;
                }
    
                $referralCode = StudentEnrollment::where('referral_code', $request->referral_code)->first();
    
                $discountedPrice = $cartItem['discounted_price'];
                $subtotal = $cartItem['price'] * $cartItem['quantity'];
                if ($referralCode) {
                    $referrer = Student::find($referralCode->student_id);
                    if ($referrer) {
                        // Ensure wallet exists and add points
                        $wallet = Wallet::where('user_id', $referrer->user_id)->first();
                        if ($wallet) {
                            $wallet->addPoints(500);
                        } else {
                            Wallet::create([
                                'user_id' => $referrer->user_id,
                                'student_id' => $student->id,
                                'balance' => 0,
                                'points' => 500,
                                'status' => 'Pending',
                            ]);
                        }
                    }
                }
    
                $total += $subtotal;
    
                // Create order
                Order::create([
                    'course_id' => $course->id,
                    'student_id' => $student->id,
                    'price' => $cartItem['price'],
                    'discounted_price' => $discountedPrice,
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'status' => 'Pending',
                    'quantity' => $cartItem['quantity']
                ]);
    
                // Create student enrollment
                $enrollment = StudentEnrollment::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'referrer_id' => $student->user_id ??  $userId,
                    'referral_code' => StudentEnrollment::generateReferralCode()
                ]);
    
                // Create enroll record
                $studentID = Carbon::now()->format('ymd') . $student->id;
                Enroll::create([
                    'student_enrol_id' => $enrollment->id,
                    'country' => $request->country,
                    'state' => $request->division,
                    'mobile_no' => $users ? $users->contactNumber : auth()->user()->contactNumber,
                    'email' => $users ? $users->emailAddress : auth()->user()->emailAddress,
                    'current_address' => $users ? $users->presentAddress : auth()->user()->presentAddress,
                    'studentID' => $studentID,
                ]);
            }
    
            // Clear the cart and referral code session
            Session::forget('cart');
            DB::commit();
    
            return redirect()->route('index')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Order could not be placed. Please try again.');
        }
    }
    
}
