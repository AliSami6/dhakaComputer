<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;

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
           
                // Check if student already exists by user ID
                $existStudent = Student::where('user_id', auth()->user()->id)->first();
    
                // Create a new Student or fetch existing one
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
    
                Session::forget('cart');

            }
    
            DB::commit();
            return redirect()->route('index')->with('success', 'Order placed successfully!');
        } catch (\Exception $exp) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    
}
