<?php

namespace App\Http\Controllers\Auth;

use App\Vendor;
use App\Slug;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;

class RegisterVendorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $guard = 'vendor';

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/vendor/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:255|unique:vendors',
            'password' => 'required|min:6|confirmed',
            'brand_name' => 'required|max:200',
            'location_id' => 'required',
            'service_id' => 'required',
        ]);
    }

    public function showRegister()
    {
        return view('vendors.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //Slug::createSlug($data['brand_name']);
        return Vendor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'slug' => (new Slug)->createSlug($data['brand_name']),
            'service_id' => $data['service_id'],
            'location_id' => $data['location_id'],
            'brand_name' => $data['brand_name'],
        ]);
        Session::flash('success', 'You have been successfully registered, login to access your dashboard');
    }
}
