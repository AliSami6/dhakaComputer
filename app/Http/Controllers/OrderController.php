<?php

namespace App\Http\Controllers;


use App\User;
use App\Models\Order;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       dd($request);
      
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|min:2|max:100',
            'lastName' => 'required|string|min:2|max:100',
            'phone_no' => 'required|unique:students',
            'email' => 'required|string|email|max:255',
            'address_one' => 'required',
            'state' => 'required|string',
            'nationality' => 'required|string',
            'country' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
       
    
        // Check if user is logged in
        $user = auth()->user();
    
        // If the user is not logged in, create a new user
        if (!$user) {
            $user = User::create([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone_no' => $request->phone_no,
                'password' => Hash::make($request->password ?? '12345678'),
            ]);
        }
    
        // Retrieve cart data from session
        $cart = session()->get('cart', []);
    
        // Initialize total
        $total = 0;
    
        // Calculate subtotal and total
        foreach ($cart as $id => $details) {
            $subtotal = $details['price'] * $details['quantity'];
            $cart[$id]['subtotal'] = $subtotal; // Add subtotal to each item in the cart
            $total += $subtotal;
        }
    
        // Assuming the cart has only one item for simplification. Adjust if there are multiple items.
        $cartItem = reset($cart);
    
        // Create Student
        $student = Student::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'course_id' => $cartItem['course_id'], // course_id from cart
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'state' => $request->state,
            'nationality' => $request->nationality,
            'country' => $request->country,
            'status' => 'Inactive',
            'payment_status' => 'Due',
        ]);
    
        // Create Order
        Order::create([
            'course_id' => $cartItem['course_id'], // course_id from cart
            'student_id' => $student->id, // student id from the student
            'price' => $cartItem['price'], // price from cart
            'discounted_price' => $cartItem['discounted_price'], // discounted_price from cart
            'subtotal' => $cartItem['subtotal'], // subtotal from cart
            'total' => $total, // total from calculated total
            'quantity' => $cartItem['quantity'], // quantity from cart
        ]);
    
        // Return success response or redirect
        return back()->with('success', 'Order has been placed successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
