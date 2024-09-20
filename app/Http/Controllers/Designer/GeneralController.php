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


    public function login_two(){
        return view('admin.auth.login');
    }
}
