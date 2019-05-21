<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class ClientLoginController extends Controller
{
    /**
     * 
     */
    public function __construct() 
    {
        $this->middleware('guest:client')->except('logout');
    }

    /**
     * 
     * 
     */
    public function validator (Request $request)
    {
        return $request->validate([
            'email' => 'required|exists:staff,email',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * 
     * 
     */
    public function login (Request $request)
    {
        self::validator($request);

        if(Auth::guard('client')->attempt($request->only('email', 'password'), $request->remember))
        {
            return redirect('/articles');
            //return redirect(route('clients-account'));
        }
        return redirect()->back()->withInput()->withErrors(['password' => 'check your password']);
    }

    /**
     * 
     */
    public function showLoginForm()
    {
        return view('auth.clients.login');
    }

    /**
     * 
     */
    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect(url('/clients/login'));
    }
}
