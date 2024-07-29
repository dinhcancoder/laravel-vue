<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\V1\AuthController;
use App\Http\Controllers\Apis\V1\UserController;

Route::prefix('v1')->group(function() {
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/users', [UserController::class, 'index']);
});
