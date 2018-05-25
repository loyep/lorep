<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout', 'lock', 'unlock');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('dashboard.auth.login');
    }

    /**
     * Show lock view
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        if ( Auth::check() == false ) {
            return response()->redirectTo($this->redirectTo());
        }

        $user = Auth::user();

        return view('dashboard.auth.lock_screen', compact('user'));
    }

    /**
     * Handle a login request to the application.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function unlock(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'password' => 'required|string',
        ]);

        $throttleKey = strtolower($user->email) . '|' . $request->ip();
        $checkLimit = $this->limiter()->tooManyAttempts($throttleKey, $this->maxAttempts());
        if ( $checkLimit ) {
            $this->fireLockoutEvent($request);

            $seconds = $this->limiter()->availableIn($throttleKey);

            throw ValidationException::withMessages([
                'password' => [Lang::get('auth.throttle', ['seconds' => $seconds])],
            ])->status(429);
        }

        $attempts = array_merge($this->credentials($request), array('email' => $user->email));

        if ( !$this->guard()->attempt($attempts) ) {
            $this->incrementLoginAttempts($request);
            throw ValidationException::withMessages([
                'password' => [trans('auth.failed')],
            ]);
        }

        $request->session()->regenerate();
        $this->clearLoginAttempts($request);
        return redirect()->intended($this->redirectPath());

    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        if ( $redirect = $request->get('redirect') ) {
            return redirect($redirect);
        }
        return redirect('/');
    }
}
