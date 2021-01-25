<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function finishActivity(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => ['bail', 'required', 'exists:users,id'],
            'activity_id' => ['bail', 'required', 'max:255'],
            'module_id' => ['bail', 'required', 'max:255'],
            'started_at' => ['bail', 'required', 'date_format:Y-m-d H:i:s'],
            'ended_at' => ['bail', 'required', 'date_format:Y-m-d H:i:s'],
            'no_of_compiles' => ['bail', 'required', 'integer'],
            'completed' => ['bail', 'required', 'boolean'],
            'compilation_timestamps' => ['bail', 'required', 'string'],
            'compilation_timestamps.*' => ['required' | 'string'],
            'screen_size' => ['bail', 'required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return [
                'success'=>false,
                'errors'=>$validator->errors()->first(),
            ];
        }
        $activity = new Activity();
        $activity->user_id = $request->user_id;
        $activity->activity_id = $request->activity_id;
        $activity->module_id = $request->module_id;
        $activity->started_at = $request->started_at;
        $activity->ended_at = $request->ended_at;
        $activity->no_of_compiles = $request->no_of_compiles;
        $activity->completed = $request->completed;
        $activity->compilation_timestamps = $request->compilation_timestamps;
        $activity->screen_size = $request->screen_size;
        $activity->save();
        $activity->compilation_timestamps = json_decode($activity->compilation_timestamps);
        return [
            'success'=>true,
            'activity'=>$activity,
        ];
    }
    public function show(){
        $activities = Activity::all();
        return view('activity',['activities'=>$activities]);
    }
}
