<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/verified', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('userverification', ['as' => 'pages.userverification', 'uses' => 'UserController@userverification']);
	Route::get('vehicleverification', ['as' => 'pages.vehicleverification', 'uses' => 'VehicleController@vehicleverification']);
	Route::get('userverification/{id}', ['as' => 'verifyuser', 'uses' => 'UserController@verifyuser']);
	Route::get('vehicleverification/{plat}', ['as' => 'verifyvehicle', 'uses' => 'VehicleController@verifyvehicle']);
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});