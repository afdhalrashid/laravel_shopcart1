<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users', //email variable is required, check table users if email is unique(no duplicate)
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),  //alternate $request['input']
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);

        return redirect()->route('user.profile'); //name of route created in routes.php
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required', //email variable is required, check table users if email is unique(no duplicate)
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email'=> $request->input('email'), 'password'=>$request->input('password')])){
            return redirect()->route('product.index');
        }
        return redirect()->back();

    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.signin');
    }
}
