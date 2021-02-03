<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Answer;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function createUser(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => ['bail', 'required', 'max:255'],
            'last_name' => ['bail', 'required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return [
                        'success'=>false,
                        'errors'=>$validator->errors()->first(),
            ];
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        return [
            'success'=>true,
            'user'=>$user,
        ];
    }
    public function show(){
        $users = User::all();
        return view('user',['users'=>$users]);
    }
    public function about(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => ['bail', 'required', 'exists:users,id'],
        ]);
        if ($validator->fails()) {
            return [
                'success'=>false,
                'errors'=>$validator->errors()->first(),
            ];
        }
        $id = $request->id;
        $user = User::find($id)->first()->toArray();
        $answers = Answer::where('user_id',$id);
        if($answers){
            $user['answers'] = $answers->toArray();
        }
        $events = Event::where('user_id',$id);
        if($events){
            $user['event'] = $events->toArray();
        }
        $activities = Activity::where('user_id',$id);
        if($activities){
            $user['activities'] = $activities->toArray();
        }
        return [
            'success'=>true,
            'about'=>$user,
        ];
    }
}
