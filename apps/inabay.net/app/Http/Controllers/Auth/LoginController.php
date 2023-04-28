<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (!Auth::validate($credentials)) {
            return Redirect::back()->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        #check if the user is activated or not
        if ($user->is_active == 0) {
            return view('auth.validation');
        }
        Auth::login($user);
        #sementara?
        return redirect('home');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
