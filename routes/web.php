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
Route::get('/admin/show','App\Http\Controllers\AdminController@show')->name('admin.show');
Route::post('/admin/login','App\Http\Controllers\AdminController@login')->name('admin.login');
Route::middleware(['auth:admin'])->group(function () {
    Route::post('/admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');
    Route::get('/activity/show','App\Http\Controllers\ActivityController@show')->name('activity.show');
    Route::get('/user/show','App\Http\Controllers\UserController@show')->name('user.show');
    Route::get('/answer/show','App\Http\Controllers\AnswerController@show')->name('answer.show');
    Route::get('/event/show','App\Http\Controllers\EventController@show')->name('event.show');
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});
