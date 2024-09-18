<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function loginform(){
        return view("user.login");
    }

    public function registerform(){
        return view("user.register");
    }
    public function verifyOtpform(){
        return view("user.verifyOtp");
    }
}
