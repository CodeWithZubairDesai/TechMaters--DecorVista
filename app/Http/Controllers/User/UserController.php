<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function loginform(){
        return view("users.login");
    }

    public function registerform(){
        return view("users.register");
    }
    public function verifyOtpform(){
        return view("users.verifyOtp");
    }
}
