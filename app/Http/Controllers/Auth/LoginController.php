<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Shows login page
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();
        $loginMethod = $request->attributes()['phone_email'];

        if (isEmail($credentials['phone_email'])) {
            $credentials['email'] = $credentials['phone_email'];
        } else {
            $credentials['phone_number'] = $credentials['phone_email'];
        }
        unset($credentials['phone_email']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withInput()->withErrors([
            'phone_email' => __("$loginMethod atau Kata Sandi Salah")
        ]);
    }
}