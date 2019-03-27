<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Auth;
use App\Staff;
use Illuminate\Support\Facades\Hash;

class StaffRegisterController extends Controller
{
    /**
     * 
     */
    public function __construct() 
    {
        $this->middleware('guest:staff');
    }

    /**
     * 
     * 
     */
    public function validator(Request $request)
    {
        return $request->validate([
            'first_name' => "required",
            'last_name' => "required",
            'email' => "required|email|unique:staff,email",
            'password' => "required|confirmed|string|min:6"
        ]);
    }

    /**
     * 
     * 
     */
    public function register(Request $request)
    {
        self::validator($request);

        $staff = Staff::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('staff')->login($staff);
        
        return auth()->guard('staff')->user();
    }

    /**
     * 
     * 
     */
    public function showRegisterForm() 
    {
        return view('auth.staff.register');
    }
}
