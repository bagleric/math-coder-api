<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function show(){
        return view('login');
    }
    public function login(Request $request){
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username','password');
        $remember = $request->remember;
        if(Auth::guard('admin')->attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'username' => 'Wrong Credentials',
        ])->withInput();
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
