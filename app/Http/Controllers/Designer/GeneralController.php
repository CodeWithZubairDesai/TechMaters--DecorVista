<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function index(){
        return view('designer.dashboard.dashboard');        
    }


    public function login(){
        return view('designer.auth.login');
    }

    public function verifyOTP(){
        return view('designer.auth.verifyOtp');
    }
}
