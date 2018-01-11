<?php

use App\Events\eventTrigger;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alertBox', function() {
    return view('eventListener');
});

Route::get('/fireEvent', function() {
    event(new eventTrigger());
});