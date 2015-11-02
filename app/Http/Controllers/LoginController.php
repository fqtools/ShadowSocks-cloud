<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
 
    public function signinAction(Request $request)
    {
        //登陆
        $username=$request->Input('username');
        $password=$request->Input('password');
        

        return response()->json();
    }
     public function signupAction(Request $request)
    {
        //登陆
        $username=$request->Input('username');
        $password=$request->Input('password');
        $email=$request->Input('email');

        return response()->json();
    }

}
