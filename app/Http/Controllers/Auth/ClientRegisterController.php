<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Client;
use Illuminate\Support\Facades\Hash;

class ClientRegisterController extends Controller
{
    /**
     * 
     */
    public function __construct() 
    {
        $this->middleware('guest:client');
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
            'email' => "required|email|unique:clients,email",
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

        $client = Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('client')->login($client);
        
        return auth()->guard('client')->user();
    }

    /**
     * 
     * 
     */
    public function showRegisterForm() 
    {
        return view('auth.clients.register');
    }
}
