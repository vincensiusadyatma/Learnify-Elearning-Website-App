<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use  App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLogin(){
    
        return view('auth.login');
    }
}
