<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Route::get('/user', [UserController::class, 'index']); <- laravel 8 routing model


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::apiResources(['user' => 'API\UserController']);
Route::apiResource('user', UserController::class);
// Route::get('profile', [UserController::class, 'profile']);
Route::get('/profile', [UserController::class, 'profile']);
// Route::get('findUser', 'API\UserController@search');
// Route::put('profile', UserController::class, 'updateProfile');
Route::put('/profile', [UserController::class, 'updateProfile']);
