<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }
    public function postSignup(\App\Http\Requests\Signup $request)
    {
        $validated = $request->validated();
       
        User::create([
            'email'=>$request->input('email'),
            'username'=>$request->input('username'),
            'password'=>bcrypt($request->input('password')),
        ]);
        
        return redirect()->route('home')->with('info','You have Successfully Signedin');

    }
 }
