<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carlist', [VehicleController::class, 'carlist']);

Route::get('/bikelist', [VehicleController::class, 'bikelist']);

Route::get('/bicyclelist', [VehicleController::class, 'bicyclelist']);

Route::get('/vanlist', [VehicleController::class, 'vanlist']);

// Route::get('/info', [UserController::class, 'info']);

Route::middleware('auth')->get('/validatetoken', function(){
    return '200';
});