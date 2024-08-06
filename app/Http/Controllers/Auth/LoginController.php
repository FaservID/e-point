<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request): RedirectResponse
{
    $input = $request->all();

    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        } elseif (auth()->user()->type == 'eksekutif') {
            return redirect()->route('eksekutif.home');
        } else {
            return redirect()->route('guru.home');
        }
    } else {
        return redirect()->route('login')
            ->withErrors(['login_error' => 'Email address and password are incorrect.'])
            ->withInput($request->only('email'));
    }
}

}
