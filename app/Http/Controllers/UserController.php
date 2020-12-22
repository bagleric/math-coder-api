<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request){
        $validatedData = $request->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['bail', 'required', 'max:255'],
        ]);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        return $user;
    }
}
