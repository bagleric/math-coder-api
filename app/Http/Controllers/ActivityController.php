<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function finishActivity(Request $request){
//        return $request->all();
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
//        return $validator->fails();
        if ($validator->fails()) {
            return [
                'success'=>false,
                'errors'=>$validator->errors()
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
        if(array_key_exists('compilation_timestamps', $request->all()) and $request->compilation_timestamps != null){
            $activity->compilation_timestamps = json_decode($activity->compilation_timestamps);
        }
        $activity->compilation_timestamps = json_decode($activity->compilation_timestamps);
        return [
            'success'=>true,
            'activity'=>$activity,
        ];
    }
    public function get(){
//        $activities = Activity::all();
//        foreach ($activities as $activity){
//            $activity->blocks = json_decode($activity->blocks);
//            $activity->prompt = html_entity_decode($activity->prompt);
//            $reflections = json_decode($activity->reflections);
//            $decoded_reflections = array();
//            foreach ($reflections as $reflection){
//                $reflection = html_entity_decode($reflection);
//                array_push($decoded_reflections,$reflection);
//            }
//            $activity->reflections= $decoded_reflections;
//        }
//        return $activities;
    }
}
