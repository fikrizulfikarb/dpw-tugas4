<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function registrasi(){
        return view('registrasi');
    }
}