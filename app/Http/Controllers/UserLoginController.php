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
                'contactNumber' => ['required'],
            ],
            [
                'contactNumber.required' => 'Phone Number is required',
            ],
        );

        // Retrieve the user by contactNumber
        $user = User::where('contactNumber', $request->contactNumber)->first();

        if ($user) {
            // Manually log in the user
            Auth::login($user);
            return redirect()->route('student.profile')->with('success', 'Login Successfully');
        } else {
            return redirect()->route('signUp')->with('error', 'Complete Registration First');
        }
    }

    public function register()
    {
        return view('frontend.authentication.register');
    }

    public function registerFormSave(Request $request)
    {
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
                'courseTime.required' => 'Course Time is required'
            ],
        );

        if ($request->hasFile('image')) {
            $image = $this->image_upload($request->file('image'), 'uploaded_files/users/', 90, 80);
        }

        User::create([
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

        return redirect()->route('student.profile')->with('success', 'Registration Successfully');
    }
  
    public function logoutData()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}