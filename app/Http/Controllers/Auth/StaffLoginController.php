<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class StaffLoginController extends Controller
{
    /**
     * 
     */
    public function __construct() 
    {
        $this->middleware('guest:staff')->except('logout');
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

        if(Auth::guard('staff')->attempt($request->only('email', 'password'), $request->remember))
        {
            return redirect('/staff/menu');
        }
        return redirect()->back()->withInput()->withErrors(['password' => 'check your password']);
    }

    /**
     * 
     */
    public function showLoginForm ()
    {
        return view('auth.staff.login');
    }

    /**
     * 
     */
    public function logout()
    {
        Auth::guard('staff')->logout();
        return redirect(url('staff/login'));
    }
}
