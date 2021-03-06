<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{
    public function storeAnswer(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => ['bail','required', 'exists:users,id'],
            'question_id' => ['bail', 'required', 'max:255'],
            'value' => ['bail', 'required', 'max:255'],
            'start_time' => ['bail', 'required', 'max:255'],
            'end_time' => ['bail', 'required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return [
                'success'=>false,
                'errors'=>$validator->errors()->first()
            ];
        }
        $answer = new Answer();
        $answer->user_id = $request->user_id;
        $answer->question_id = $request->question_id;
        $answer->value = $request->value;
        $answer->start_time = $request->start_time;
        $answer->end_time = $request->end_time;
        $answer->save();
        return [
            'success'=>true,
            'answer'=>$answer,
        ];
    }
    public function show(){
        $answers = Answer::all();
        return view('answer',['answers'=>$answers]);
    }
}
