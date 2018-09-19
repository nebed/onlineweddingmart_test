<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginVendorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Vendor Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function __construct()
    {
        $this->middleware('guest:vendor');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
        {
            return redirect()->intended(route('vendor.profile'));
        }

        return redirect()->back()->withInput($request->only('email', 'renmember'));
    }
}
