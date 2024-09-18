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
    
    public function register(Request $request)
    {
        Log::info("Hello I am here");
    
        // Validate the request
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'min:8'],
            'role' => 'required|integer|in:1,2,3',
        ]);
    
        // If validation fails, return error response
        if ($validator->fails()) {
            Log::info($validator->errors()->first());
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first(),
            ], 404);
        }
    
        // Create the user with the full name
        User::create([
            'name' => $request->firstname . ' ' . $request->lastname, // Ensure a space between first and last name
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    
        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => "User Registered Successfully",
        ], 200);
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
            if ($user->role == "user" || $user->role == "designer") {
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
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $user = Auth::user();

        if ($user->verification_code == $request->otp) {
            if($user->role == "user"){
                return redirect()->route('welcome');
            }else{
                return redirect()->route('designer.dashboard');
            }
        }

        return redirect()->route('verify.otp.form')->with('error', 'Invalid OTP. Please try again.');
    }



    
}
