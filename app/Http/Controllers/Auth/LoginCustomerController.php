<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginCustomerController extends Controller
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
        $this->middleware('guest:customer',['except'=>['logout']]);
    }

    public function showLogin(Request $request)
    {
        return view('customers.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
        {
            //return redirect()->intended(route('customer.dashboard'));
            return $this->sendLoginResponse($request);
        }

        //return redirect()->back()->withInput($request->only('email', 'remember'));
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard('customer')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function username()
    {
        return 'email';
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard('customer')->user())
                ?: redirect()->intended($this->redirectPath());
    }
}
