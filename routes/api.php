<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
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

//Route::middleware('auth:sanctum')->post('/login', [AuthController::class, 'login']);


//Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');


// Route::middleware('auth:sanctum')->post('/validate', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/uploadimage', [UserController::class, 'uploadImage']);
    Route::post('/validate', function (Request $request) {
        return $request->user();
    });
    // Route::post('/getimage', function (Request $request) {
    //     return response()->file('storage/picture/profile/'.$request->user()->id.'.png');
    // });

    Route::post('/getimage', [UserController::class, 'getImage']);
    Route::post('/status', [StatusController::class, 'list']);
});




// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::get('/us', function(Request $request) {
//         return auth()->user();
//     });
// });

Route::get('/carlist', [VehicleController::class, 'carlist']);

Route::get('/bikelist', [VehicleController::class, 'bikelist']);

Route::get('/bicyclelist', [VehicleController::class, 'bicyclelist']);

Route::get('/vanlist', [VehicleController::class, 'vanlist']);



// Route::middleware('auth')->get('/validatetoken', function(){
//     return '200';
// });