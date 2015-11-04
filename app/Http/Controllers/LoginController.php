<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
 
    public function signinAction(Request $request)
    {
        //登陆
        $email=$request->Input('email');
        $password=$request->Input('password');
        if (Auth::attempt([
                'email'=>$email,
                'password'=>$password   
            ])) {
                  return response()->json(true);
         } 
        return response()->json("用户名或者密码错误");
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
