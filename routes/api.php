<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ChatController;

Route::post('/register', [AuthController::class, 'register']);

Route::get('email/verify/{id}',[AuthController::class, 'verify'])->name('verification.verify');
Route::get('email/resend', [AuthController::class, 'resend'])->name('verification.resend');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::post('/uploadimage', [UserController::class, 'uploadImage']);
    Route::post('/validate', function (Request $request) {
        return $request->user();
    });
    Route::post('/getimage', [UserController::class, 'getImage']);
    Route::post('/status', [StatusController::class, 'list']);

    Route::post('/send', [ChatController::class, 'send']);
    Route::post('/chatroom', [ChatController::class, 'list']);
    Route::post('/message', [ChatController::class, 'messages']);
});

Route::post('/carlist', [VehicleController::class, 'carlist']);

Route::post('/bikelist', [VehicleController::class, 'bikelist']);

Route::post('/bicyclelist', [VehicleController::class, 'bicyclelist']);

Route::post('/vanlist', [VehicleController::class, 'vanlist']);