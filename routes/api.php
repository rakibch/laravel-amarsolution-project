<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentAuthController;
use App\Http\Controllers\API\AdminAuthController;


Route::prefix('student')->controller(StudentAuthController::class)->group(function () {
    Route::post('/login', 'login');

    Route::middleware('auth:student')->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me', 'me');
    });
});


Route::prefix('admin')->controller(AdminAuthController::class)->group(function () {
    Route::post('/login', 'login');

    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me', 'me');
    });
});



