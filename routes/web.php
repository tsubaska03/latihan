<?php

use App\Http\Controllers\Frontend\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::resource('home', HomeController::class);
});