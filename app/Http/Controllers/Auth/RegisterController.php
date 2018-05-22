<?php

namespace App\Http\Controllers\Auth;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('dashboard.auth.register');
    }

    /**
     * Where to redirect users after registration.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return route('dashboard');
    }

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Entities\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nickname' => strtolower($data['name']),
            'display_name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);

        $metas = $user->meta()->createMany([
            ['meta_key' => 'description', 'meta_value' => ''],
            ['meta_key' => 'rich_editing', 'meta_value' => 'true'],
            ['meta_key' => 'comment_shortcuts', 'meta_value' => 'false'],
            ['meta_key' => 'use_ssl', 'meta_value' => 'false'],
            ['meta_key' => 'show_admin_bar_front', 'meta_value' => 'true'],
            ['meta_key' => 'locale', 'meta_value' => ''],
        ]);
        return $user;
    }
}
