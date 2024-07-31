<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
     public function login()
    {
        return view('frontend.authentication.login');
    }

    public function LoginDataCheck(Request $request)
    {
        $request->validate(
            [
                'phone_no' => ['required','min:11','numeric'],
                'password' => ['required', 'string', 'min:8'],
            ],
            [
                'phone_no.required' => 'Phone Number is required',
                'password.required' => 'Password is required',
            ],
        );

        // Attempt to log the user in
        if (Auth::attempt(['phone_no' => $request->phone_no, 'password' => $request->password])) {
            return redirect()->route('student.profile')->with('success', 'Login Successfully');
        }else{
            return redirect()->route('signUp')->with('success', 'Complete Registration First');
        }

        // If authentication fails, redirect back with an error message
        return redirect()
            ->back()
            ->with(['error' => 'Invalid credentials provided.']);
    }
    public function register()
    {
        return view('frontend.authentication.register');
    }

    public function registerFormSave(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'string',
                'max:255',
                'last_name' => 'required',
                'string',
                'max:255',
                'phone_no' => 'required',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ],
            [
                'first_name.required' => 'First Name is required',
                'last_name.required' => 'Last Name is required',
                'phone_no.required' => 'Phone Number is required',
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ],
        );
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('sign_in')->with('success', 'Registration Successfully');
    }
    public function logoutData()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}