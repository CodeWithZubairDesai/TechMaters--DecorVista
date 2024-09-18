<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    //

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|integer|in:1,2,3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('status', 'Registration successful! Please log in.');
}

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showOtpForm()
    {
        return view('auth.verifyOtp');
    }


    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
    
            // Check if the user has a role that requires OTP verification
            if ($user->role == "user" || $user->role == 2) {
                // Generate a 6-digit OTP
                $code = rand(100000, 999999);
    
                // Save the OTP to the user's record
                $user->verification_code = $code;
                $user->save();
    
                // Send the OTP email to the user
                Mail::to($user->email)->send(new VerificationCodeMail($code));
    
                // Redirect to the OTP verification page
                return redirect()->route('verify.otp.form');
            }
    
            // For roles that don't require OTP, redirect to the intended page
            return redirect()->intended('dashboard');
        }
    
        // If login fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    


    public function verifyOtp(Request $request)
    {
        // Validate the input
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $user = Auth::user();

        // Check if the OTP matches
        if ($user->verification_code == $request->otp) {
            // OTP verified successfully, clear the verification code
            $user->verification_code = null;
            $user->save();

            // Redirect to the welcome page or intended page
            return redirect()->route('welcome');
        }

        // If OTP does not match, redirect back with an error message
        return redirect()->route('verify.otp.form')->with('error', 'Invalid OTP. Please try again.');
    }



    
}
