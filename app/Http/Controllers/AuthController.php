<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    function loginIndex(){
        return view('login');
    }

    function registerIndex(){
        return view('register');
    }

}
