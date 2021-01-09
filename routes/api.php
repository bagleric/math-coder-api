<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/user/create','App\Http\Controllers\UserController@createUser');
Route::post('/answer/store','App\Http\Controllers\AnswerController@storeAnswer');
Route::post('/event/store','App\Http\Controllers\EventController@storeEvent');
Route::get('/standard/get','App\Http\Controllers\StandardController@get');
Route::get('/definition/get','App\Http\Controllers\DefinitionController@get');
Route::get('/activity/get','App\Http\Controllers\ActivityController@get');
Route::post('/activity/finish','App\Http\Controllers\ActivityController@finishActivity');

