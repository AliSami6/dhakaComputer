<?php

namespace App\Http\Controllers;

use session;
use App\User;
use App\Models\Order;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\StudentEnrollment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            return redirect()->back()->with('error', 'Please log in Or Complet Registration to place an order.');
        }

        $request->validate(
            [
                'applicantName' => 'required|string|max:255',
                'fatherName' => 'required|string|max:255',
                'fatherOccupation' => 'required|string|max:255',
                'motherName' => 'required|string|max:255',
                'nationalId' => 'required|string|max:255',
                'occupation' => 'required',
                'education' => 'required',
                'motherOccupation' => 'required|string|max:255',
                'presentAddress' => 'required',
                'permanentAddress' => 'required',
                'contactNumber' => 'required',
                'emailAddress' => 'required|string|email|unique:users',
                'dob' => 'required|string',
                'registrationNumber' => 'required|string|max:255',
                'race' => 'required',
                'gender' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
                'courseDay' => 'required|integer|min:1',
                'courseTime' => 'required|integer|min:1',
            ],
            [
                'applicantName.required' => 'Applicant Name is required',
                'fatherName.required' => 'Father Name is required',
                'fatherOccupation.required' => 'Father Occupation is required',
                'motherName.required' => 'Mother Name is required',
                'nationalId.required' => 'National ID is required',
                'occupation.required' => 'Occupation is required',
                'education.required' => 'Education is required',
                'motherOccupation.required' => 'Mother Occupation is required',
                'contactNumber.required' => 'Contact Number is required',
                'contactNumber.unique' => 'Contact Number already exists',
                'emailAddress.required' => 'Email Address is required',
                'emailAddress.unique' => 'Email Address already exists',
                'registrationNumber.required' => 'Registration Number is required',
                'race.required' => 'Race is required',
                'gender.required' => 'Gender is required',
                'courseDay.required' => 'Course Day is required',
                'courseTime.required' => 'Course Time is required',
            ],
        );
        // Get cart items from session
        $cart = session()->get('cart', []);

        // Check if the cart is not empty
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Get the first course item from the cart
        $firstCartItem = reset($cart); // reset() will return the first item in the array

        try {
            DB::beginTransaction();

            // Initialize total
            $total = 0;

            // Loop through cart items and create Orders
            foreach ($cart as $cartItem) {
                $course = Course::findOrFail($cartItem['course_id']);

                $subtotal = $cartItem['price'] * $cartItem['quantity'];
                $total += $subtotal;

                // Check if student already exists by email or phone number
                $existStudent = Student::where('user_id', auth()->user()->id)
                ->first();

                // Create a new Student or fetch existing one
                if (!$existStudent) {
                    $student = Student::create([
                        'studentsName' => $request->applicantName,
                        'course_id' => $course->id,
                        'user_id' => auth()->user()->id,
                        'address' => $request->presentAddress,
                        'city' => $request->city,
                        'division' => $request->division,
                        'country' => $request->country,
                        'status' => 'Active',
                        'payment_status' => 'Due',
                    ]);
                } else {
                    $student = $existStudent;
                }
                $orderData = [
                    'course_id' => $course->id,
                    'student_id' => $student->id,
                    'price' => $cartItem['price'],
                    'discounted_price' => $cartItem['discounted_price'],
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'status' => 'Pending',
                    'quantity' => $cartItem['quantity'],
                ];

                $order = Order::create($orderData);
                $enrollmentID = StudentEnrollment::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                ]);
                $studentID = Carbon::now()->format('ymd') . $student->id;
                Enroll::create([
                    'student_enrol_id' => $enrollmentID->id,
                    'country' => $request->country,
                    'state' => $request->division,
                    'mobile_no' => auth()->user()->contactNumber,
                    'email' => auth()->user()->emailAddress,
                    'current_address' => auth()->user()->presentAddress,
                    'studentID' => $studentID,
                ]);
                session()->forget('cart');
            }
            DB::commit();
        } catch (\Exception $exp) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
