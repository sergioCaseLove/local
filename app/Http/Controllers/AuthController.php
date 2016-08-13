<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    public function authenticate(Request $r)
    {
        if (Auth::attempt(['email' => $r->get('email'), 'password' => $r->get('password')])) {
            // Authentication passed...
            return redirect()->intended();
        }
        return view('auth.login')->with(['status'=>'error']);
    }
}
