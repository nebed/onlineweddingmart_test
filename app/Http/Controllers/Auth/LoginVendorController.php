<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginVendorController extends Controller
{
    use ThrottlesLogins, RedirectsUsers;
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
        $this->middleware('guest:vendor',['except'=>['logout']]);
    }

    public function showLogin(Request $request)
    {
        return view('vendors.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
        {
            $request->session()->regenerate();

            $this->clearLoginAttempts($request);
            return redirect()->intended(route('vendor.profile'));
            //return $this->sendLoginResponse($request);
        }

        //return redirect()->back()->withInput($request->only('email', 'remember'));
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        Auth::guard('vendor')->logout();

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

    /*protected function sendLoginResponse(Request $request)
    /{
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard('vendor')->user())
                ?: redirect()->intended($this->redirectPath());
    }*/
}
