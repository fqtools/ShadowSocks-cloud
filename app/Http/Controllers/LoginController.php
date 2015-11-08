<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;

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
        //注册
        $username=$request->Input('username');
        $password=$request->Input('password');
        $email=$request->Input('email');
        $rules=[
             'name' => 'required|min:4',
             'password' => 'required|min:8',
             'email' => 'required|email|unique:users'
        ];
        $valid=Validator::make([
             'name'=>$username,  
             'password'=>$password,
             'email'=>$email   
            ],$rules);
        if ($valid->fails()) {
             return response()->json($valid->messages()->first());
        }else{
             $data=[
                  'name'=>$username,  
                  'password'=>bcrypt($password),
                  'email'=>$email, 
                  'created_at'=>time(), 
                  'updated_at'=>time(),
                  'role'=>0
             ];
             $user = User::create($data);
             return response()->json(true);
        }
        return response()->json(false);
    }

}
