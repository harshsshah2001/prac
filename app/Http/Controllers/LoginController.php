<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginform(){
        return view('login.login');
    }

    public function LoginData(Request $request){
        
    }
}
