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
            'pwd' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $username = $request->username;
        $password = $request->pwd;
        if($username == 'admin'){
            if($password == '1234'){
                return view('welcome');
            }else{
                $validator->errors()->add(
                    'pwd', 'Wrong Password!'
                );
            }
        }else{
            $validator->errors()->add(
                'username', 'Wrong Username!'
            );
        }
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }
}
