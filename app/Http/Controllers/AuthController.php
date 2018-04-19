<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
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
        
        return redirect()->route('auth.signin')->with('info','You have Successfully Signedin');

    }
    
    public function getSignin()
    {
        return view('auth.signin');
    }
    
    public function postSignin(\App\Http\Requests\Signin $request)
    {
        $validated = $request->validated();

        if(!Auth::attempt(['email' => $request->input('email') , 'password' => $request->input('password')],$request->has('remember')))
        {
             return redirect()->back()->with('info','Couldn\'t sign you in');
        }

        return redirect()->route('home')->with('info','You have successfully signed in');

    }

    public function getSignout()
    {
        
        Auth::logout();
        return redirect()->route('home');
    }
}
