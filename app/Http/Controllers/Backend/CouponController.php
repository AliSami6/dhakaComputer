<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function applyReferralCode(Request $request)
    {
        $request->validate([
            'referral_code' => 'required|string|exists:student_enrollments,referral_code',
        ]);

        $referralCode = $request->input('referral_code');
        $enrollment = StudentEnrollment::where('referral_code', $referralCode)->first();

       if ($enrollment) {
            Session::put('referral_code', $referralCode);

            return redirect()->back()->with('success', 'Referral code applied successfully.');
        }

        return redirect()->back()->with('error', 'Invalid referral code.');
    }
    public function couponList(){
        return view('backend.pages.courses.coupons.coupons-list');
    }
    public function CreateCopons(){
        return view('backend.pages.courses.coupons.create-coupons');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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