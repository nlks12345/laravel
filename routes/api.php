<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Api;
use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('/user')->group( function(){
Route::post('/login','App\Http\Controllers\LoginController@login');
//});

Route::post('/user',[UserController::class,'create']);
Route::get('/user',[UserController::class,'show']);
Route::get('/user/{id}',[UserController::class,'showById']);
Route::put('/user/{id}',[UserController::class,'updateById']);
Route::delete('/user/{id}',[UserController::class,'deleteById']);

Route::get('/apis',[ApiController::class,'index']);
Route::post('/apis',[ApiController::class,'store']);
Route::get('/apis/{id}',[ApiController::class,'show']);
Route::patch('/apis/{id}',[ApiController::class,'update']);