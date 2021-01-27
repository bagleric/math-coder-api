<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        dd($credentials);
        dd(Auth::guard('admin')->attempt($credentials));
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('home');
        }
        return redirect()->back();

//        $username = $request->username;
//        $password = $request->password;
//        $errors = [];
//        if($username == 'admin'){
//            if($password == '1234'){
//                return redirect()->route('home');
//            }else{
//                $errors['password'] = ['Wrong Password!'];
//            }
//        }else{
//            $errors['username'] = ['Wrong Username!'];
//        }
//        return redirect()->back()
//            ->withErrors($errors)
//            ->withInput();
    }
}
