<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'course_id' => $course->id,
            'course_title' => $course->course_title,
            'course_thumbnail' => $course->media->course_thumbnail,
            'price' => $course->prices->price,
            'discounted_price' => $course->prices->discounted_price,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Added to cart successfully!');
}


    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['status' => 'success', 'message' => 'Cart successfully updated!']);
        }
        return response()->json(['status' => 'error', 'message' => 'Cart not updated!']);
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
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