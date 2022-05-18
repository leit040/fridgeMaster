<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/location',[\App\Http\Controllers\API\LocationController::class,'index']);
Route::get('/location/{location}',[\App\Http\Controllers\API\LocationController::class,'show']);

Route::get('/order',[\App\Http\Controllers\API\LocationController::class,'show']);
Route::post('/makeOrder',[\App\Http\Controllers\API\OrderController::class,'makeOrder']);
Route::post('/store',[\App\Http\Controllers\API\OrderController::class,'store']);
