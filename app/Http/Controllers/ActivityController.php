<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function get(){
        $activities = Activity::all();
        foreach ($activities as $activity){
            $activity->blocks = json_decode($activity->blocks);
            $activity->prompt = html_entity_decode($activity->prompt);
            $reflections = json_decode($activity->reflections);
            $decoded_reflections = array();
            foreach ($reflections as $reflection){
                $reflection = html_entity_decode($reflection);
                array_push($decoded_reflections,$reflection);
            }
            $activity->reflections= $decoded_reflections;
        }
        return $activities;
    }
}
