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
        // Define base rules
        $rules = [
            'applicantName' => 'required|string|max:255',
            'fatherName' => 'required|string|max:255',
            'fatherOccupation' => 'required|string|max:255',
            'motherName' => 'required|string|max:255',
            'nationalId' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'motherOccupation' => 'required|string|max:255',
            'contactNumber' => 'required|string',
            'dob' => 'required|string',
            'registrationNumber' => 'required|string|max:255',
            'race' => 'required|string',
            'gender' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'courseDay' => 'required|integer|min:1',
            'courseTime' => 'required|integer|min:1',
        ];

        // Additional rules for unauthenticated users
        if (!auth()->check()) {
            $rules['contactNumber'] .= '|unique:users';
            $rules['emailAddress'] = 'required|string|email|unique:users';
        } else {
            // Adjust rules for authenticated users
            $rules['emailAddress'] = 'nullable|string|email';
            $rules['applicantName'] = 'nullable';
            $rules['fatherName'] = 'nullable';
            $rules['fatherOccupation'] = 'nullable';
            $rules['motherName'] = 'nullable';
            $rules['motherOccupation'] = 'nullable';
            $rules['nationalId'] = 'nullable';
            $rules['occupation'] = 'nullable';
            $rules['education'] = 'nullable';
            $rules['registrationNumber'] = 'nullable';
            $rules['race'] = 'nullable';
            $rules['dob'] = 'nullable';
            $rules['gender'] = 'nullable';
            $rules['courseDay'] = 'nullable';
            $rules['courseTime'] = 'nullable';
            $rules['contactNumber'] = 'nullable|string';
        }

        // Custom messages for validation errors
        $messages = [
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
            'dob.required' => 'Date of Birth is required',
            'registrationNumber.required' => 'Registration Number is required',
            'race.required' => 'Race is required',
            'gender.required' => 'Gender is required',
            'courseDay.required' => 'Course Day is required',
            'courseTime.required' => 'Course Time is required',
        ];

        $request->validate($rules, $messages);

        // Initialize $userId with authenticated user's ID, if available
        $userId = auth()->check() ? auth()->user()->id : null;

        // Handle user creation if the user is not authenticated
        if (!$userId) {
            $image = $request->hasFile('image') ? $this->image_upload($request->file('image'), 'uploaded_files/users/', 90, 80) : null;

            $user = User::create([
                'applicantName' => $request->applicantName,
                'fatherName' => $request->fatherName,
                'fatherOccupation' => $request->fatherOccupation,
                'motherName' => $request->motherName,
                'nationalId' => $request->nationalId,
                'occupation' => $request->occupation,
                'education' => $request->education,
                'motherOccupation' => $request->motherOccupation,
                'presentAddress' => $request->presentAddress,
                'permanentAddress' => $request->permanentAddress,
                'contactNumber' => $request->contactNumber,
                'emailAddress' => $request->emailAddress,
                'dob' => $request->dob,
                'registrationNumber' => $request->registrationNumber,
                'race' => $request->race,
                'gender' => $request->gender,
                'image' => $image,
                'courseDay' => $request->courseDay,
                'courseTime' => $request->courseTime,
            ]);

            // Assign the new user's ID to $userId
            $userId = $user->id;
        }

        // Begin transaction
        DB::beginTransaction();

        try {
            // Get cart items from session
            $cart = Session::get('cart', []);
            if (empty($cart)) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }
            $total = 0;
            foreach ($cart as $cartItem) {
                $course = Course::findOrFail($cartItem['course_id']);
                $student = Student::firstOrNew(['user_id' => $userId]);
                if (!$student->exists) {
                    $student
                        ->fill([
                            'studentsName' => $request->applicantName,
                            'course_id' => $course->id,
                            'user_id' => $userId,
                            'address' => $request->presentAddress,
                            'city' => $request->city,
                            'division' => $request->division,
                            'country' => $request->country,
                            'status' => 'Active',
                            'payment_status' => 'Due',
                        ])
                        ->save();
                }

                $referralCode = StudentEnrollment::where('referral_code', $request->referral_code)->first();
                $discountedPrice = $cartItem['discounted_price'];
                $subtotal = $cartItem['price'] * $cartItem['quantity'];

                if ($referralCode) {
                    $referrer = Student::find($referralCode->student_id);
                    if ($referrer) {
                        $wallet = Wallet::firstOrCreate(['user_id' => $referrer->user_id], ['balance' => 0, 'points' => 0, 'status' => 'Pending']);
                        $wallet->increment('points', 500);
                    }
                }

                $total += $subtotal;

                // Create order
                $order = Order::create([
                    'course_id' => $course->id,
                    'student_id' => $student->id,
                    'price' => $cartItem['price'],
                    'discounted_price' => $discountedPrice,
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'status' => 'Pending',
                    'quantity' => $cartItem['quantity'],
                ]);

                // Create student enrollment
                $enrollment = StudentEnrollment::create([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'referrer_id' => $referralCode->student_id ?? null,
                    'referral_code' => StudentEnrollment::generateReferralCode(),
                ]);

                // Create enroll record
                $studentID = Carbon::now()->format('ymd') . $student->id;
                Enroll::create([
                    'student_enrol_id' => $enrollment->id,
                    'country' => $request->country,
                    'state' => $request->division,
                    'mobile_no' =>$user->contactNumber ?? auth()->user()->contactNumber,
                    'email' => $user->emailAddress ?? auth()->user()->emailAddress,
                    'current_address' => $user->presentAddress ?? auth()->user()->presentAddress,
                    'studentID' => $studentID
                ]);
            }

            // Clear the cart and referral code session
            Session::forget('cart');

            // Commit the transaction
            DB::commit();

            return redirect()->route('index')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return redirect()->back()->with('error', 'Order could not be placed. Please try again.');
        }
    }
}
