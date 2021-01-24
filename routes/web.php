<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/activities/show','App\Http\Controllers\ActivityController@show');
Route::get('/users/show','App\Http\Controllers\UserController@show');
Route::get('/answers/show','App\Http\Controllers\AnswerController@show');
Route::get('/', function () {
    return view('welcome');
});

