<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function show(){
        return view('login');
    }
    public function login(Request $request){
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;
        $errors = [];
        if($username == 'admin'){
            if($password == '1234'){
                return view('welcome');
            }else{
                $errors['password'] = ['Wrong Password!'];
            }
        }else{
            $errors['username'] = ['Wrong Username!'];
        }
        return redirect()->back()
            ->withErrors($errors)
            ->withInput();
    }
}
