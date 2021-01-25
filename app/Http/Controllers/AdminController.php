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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

    }
}
