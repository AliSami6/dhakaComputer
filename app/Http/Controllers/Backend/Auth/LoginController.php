<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;

    /**
     * Show login form for admin guard.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    /**
     * Login admin.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate Login Data
        $request->validate([
            'email' => 'required|email|string|max:50',
            'password' => 'required|string',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        // Attempt to login using email
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in!');
        } 

        // Attempt to login using username
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in!');
        }

        // Invalid credentials
        return back()->with('error', 'Invalid email or password')->withInput($request->only('email', 'remember'));
    }

    /**
     * Logout admin guard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}