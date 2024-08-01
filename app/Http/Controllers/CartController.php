<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.cart');
    }

 public function addToCart($id)
{
    $course = Course::findOrFail($id);
    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'course_id' => $course->id,
            'course_title' => $course->course_title,
            'price' => $course->price,
            'discounted_price' => $course->discounted_price,
            'quantity' => 1,
        ];
    }

    Session::put('cart', $cart);
    return redirect()->route('process_cheakout')->with('success', 'Added to cart successfully!');
}


    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = Session::get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
            return response()->json(['status' => 'success', 'message' => 'Cart successfully updated!']);
        }
        return response()->json(['status' => 'error', 'message' => 'Cart not updated!']);
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = Session::get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                Session::put('cart', $cart);
            }
            return response()->json(['status' => 'success', 'message' => 'Cart Successfully removed!']);
        }
        return response()->json(['status' => 'error', 'message' => 'Cart not removed!']);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}