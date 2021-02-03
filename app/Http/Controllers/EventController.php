<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use mysql_xdevapi\Exception;

class EventController extends Controller
{
    public function storeEvent(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => ['bail', 'required', 'exists:users,id'],
            'activity_id' => ['bail', 'required', 'max:255'],
            'module_id' => ['bail', 'required', 'max:255'],
            'blockly_event'=>['bail', 'json', 'nullable'],
            'created_at' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return [
                'success'=>false,
                'errors'=>$validator->errors()->first(),
            ];
        }
        try {
            $created_at = Carbon::createFromFormat('Y-m-d H:i:s', $request->created_at)->toDateTimeString();
            $validator = Validator::make(['created_at' => $created_at], [
                'created_at' => ['required', 'date_format:Y-m-d H:i:s'],
            ]);
            if ($validator->fails()) {
                return [
                    'success'=>false,
                    'errors'=>$validator->errors()->first(),
                ];
            }
        }catch (Exception $exception){
            return [
                'success'=>false,
                'errors'=>"The created at field must be in Y-m-d H:i:s format",
            ];
        }

        $event = new Event();
        $event->user_id = $request->user_id;
        $event->activity_id = $request->activity_id;
        $event->module_id = $request->module_id;
        if (array_key_exists('blockly_event', $request->all()) and $request->blockly_event != null){
            $event->blockly_event = $request->blockly_event;
        }
        $event->created_at = $request->created_at;
        $event->save();
        $event->blockly_event = json_decode($event->blockly_event);
        return [
            'success'=>true,
            'event'=>$event,
        ];
    }
    public function show(){
        $events = Event::all();
//        return $events;
        return view('event',['events'=>$events]);
    }
}
