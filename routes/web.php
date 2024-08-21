<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashBoard');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::post('/', 'store');
    Route::post('/', 'update');
    Route::post('/', 'destroy');
});
