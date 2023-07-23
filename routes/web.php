<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('auth.index');
    Route::post('/', 'login')->name('auth.login');
});

Route::controller(TimelineController::class)->group(function () {
    Route::get('/timeline', 'index')->name('timeline.index');
});
