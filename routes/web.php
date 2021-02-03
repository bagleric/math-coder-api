<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
Route::get('/test',function (){
    $dtime = Carbon::createFromFormat('Y-m-d H:i:s', '2019-02-01 03:45:27')->toDateTimeString();
    echo $dtime;
});
Route::get('/admin/show','App\Http\Controllers\AdminController@show')->name('admin.show');
Route::post('/admin/login','App\Http\Controllers\AdminController@login')->name('admin.login');
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');
    Route::get('/activity/show','App\Http\Controllers\ActivityController@show')->name('activity.show');
    Route::get('/user/show','App\Http\Controllers\UserController@show')->name('user.show');
    Route::get('/answer/show','App\Http\Controllers\AnswerController@show')->name('answer.show');
    Route::get('/event/show','App\Http\Controllers\EventController@show')->name('event.show');
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});
