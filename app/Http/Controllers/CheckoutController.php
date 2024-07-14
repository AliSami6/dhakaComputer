<?php

namespace App\Http\Controllers;

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

        // Validate the request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'address_one' => 'required|string|max:255',
            'address_two' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_no' => 'required|string|max:50',
            'password' => 'nullable|string|min:8|max:255',
            'create_account' => 'nullable|boolean',
        ]);

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

            // Check if student already exists by email or phone number
            $existStudent = Student::where('email', $validatedData['email'])
                ->orWhere('phone_no', $validatedData['phone_no'])
                ->first();

            // Create a new Student or fetch existing one
            if (!$existStudent) {
                $student = Student::create([
                    'firstName' => $validatedData['firstName'],
                    'lastName' => $validatedData['lastName'],
                    'email' => $validatedData['email'],
                    'course_id' => $firstCartItem['course_id'],
                    'date_of_birth' => now(),
                    'phone_no' => $validatedData['phone_no'],
                    'address_one' => $validatedData['address_one'],
                    'address_two' => $validatedData['address_two'],
                    'state' => $validatedData['state'],
                    'nationality' => $validatedData['nationality'],
                    'country' => $validatedData['country'],
                    'status' => 'Inactive',
                    'payment_status' => 'Due',
                ]);
            } else {
                $student = $existStudent;
            }

            // Initialize total
            $total = 0;

            // Loop through cart items and create Orders
            foreach ($cart as $cartItem) {
                $course = Course::findOrFail($cartItem['course_id']);

                $subtotal = $cartItem['price'] * $cartItem['quantity'];
                $total += $subtotal;

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
                    'country' => $validatedData['country'],
                    'state' => $validatedData['state'],
                    'mobile_no' => $validatedData['phone_no'],
                    'email' => $validatedData['email'],
                    'current_address' => $validatedData['address_one'],
                    'studentID' => $studentID,
                ]);
                $tran_id = uniqid();
                $post_data = [];
                $post_data['total_amount'] = $order->total;
                $post_data['currency'] = 'BDT';
                $post_data['tran_id'] = $tran_id;

                # CUSTOMER INFORMATION
                $post_data['cus_name'] = $student->firstName . ' ' . $student->lastName;
                $post_data['cus_email'] = $student->email;
                $post_data['cus_add1'] = $student->address_one;
                $post_data['cus_add2'] = $student->address_two;
                $post_data['cus_city'] = '';
                $post_data['cus_state'] = $student->state;
                $post_data['cus_postcode'] = '';
                $post_data['cus_country'] = $student->country;
                $post_data['cus_phone'] = $student->phone_no;
                $post_data['cus_fax'] = '';

                # SHIPMENT INFORMATION
                $post_data['ship_name'] = $student->firstName . ' ' . $student->lastName;
                $post_data['ship_add1'] = $student->address_one;
                $post_data['ship_add2'] = $student->address_two;
                $post_data['ship_city'] = 'Dhaka';
                $post_data['ship_state'] = $student->state;
                $post_data['ship_postcode'] = '1000';
                $post_data['ship_phone'] = $student->phone_no;
                $post_data['ship_country'] = $student->country;

                $post_data['shipping_method'] = 'sslcommerz';
                $post_data['product_name'] = 'Computer';
                $post_data['product_category'] = 'Goods';
                $post_data['product_profile'] = 'physical-goods';

                session()->forget('cart');

                #Before  going to initiate the payment order status need to update as Pending.
                $update_product = DB::table('payments')
                    ->where('transaction_id', $post_data['tran_id'])
                    ->updateOrInsert([
                        'order_id' => $order->id,
                        'name' => $post_data['cus_name'],
                        'email' => $post_data['cus_email'],
                        'phone' => $post_data['cus_phone'],
                        'status' => 'Pending',
                        'address' => $post_data['cus_add1'],
                        'transaction_id' => $post_data['tran_id'],
                        'currency' => $post_data['currency'],
                        'amount' => $post_data['total_amount'],
                        'payment_method' => $post_data['shipping_method'],
                    ]);
                 
            }
            DB::commit();
            // Clear the cart after creating the student

            $sslc = new SslCommerzNotification();
            # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
            $payment_options = $sslc->makePayment($post_data, 'hosted');

            if (!is_array($payment_options)) {
                print_r($payment_options);
                $payment_options = [];
            }
        } catch (\Exception $exp) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
    
        $sslc = new SslCommerzNotification();
    
        // Check order status in order table against the transaction id or order id.
        $order_details = DB::table('payments')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount', 'order_id') // Ensure order_id is selected
            ->first();
    
        if ($order_details->status == 'Pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);
    
            if ($validation) {
                $update_payment = DB::table('payments')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Processing']);
    
                // Check if the payment status was updated successfully
                if ($update_payment) {
                    $orderStatus = DB::table('orders')
                        ->where('id', $order_details->order_id) // Use order_id from order_details
                        ->update(['status' => 'Processing']);
    
                    // Check if the order status was updated successfully
                    if ($orderStatus) {
                      
                        return redirect()->route('index')->with('success','Order status successfully');
                    } else {
                       
                        return redirect()->route('index')->with('error','Order status update failed');
                    }
                } else {
                   
                    return redirect()->route('index')->with('error','Payment status update failed');
                }
    
                return redirect()->route('index')->with('success','Transaction is Successful');
            } else {
                return redirect()->route('index')->with('error','Order validation failed');
            }
        } elseif ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
         
            return redirect()->route('index')->with('success','Transaction is successfully Completed');
        } else {
            // Something wrong happened. Redirect customer to your product page.
            return redirect()->back()->with('error','Invalid Transaction');
        }
    }
    
}
