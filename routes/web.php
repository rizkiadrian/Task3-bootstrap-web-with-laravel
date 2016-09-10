<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return View::make('disp.index');
});

Route::get('/profile', function () {
    return View::make('disp.profile');
});
Route::get('/contact', function () {
    return View::make('disp.contact');
});

