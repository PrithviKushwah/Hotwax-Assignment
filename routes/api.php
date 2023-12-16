<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\order_header;
use App\Http\Controllers\order_part;
use App\Http\Controllers\party;
use App\Http\Controllers\person;
use App\Http\Controllers\product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login',[UserAPIController::class,'login'])->name('login');
Route::post('/register',[UserAPIController::class,'register'])->name('register');
Route::middleware('auth:sanctum')->get('/logout',[UserAPIController::class,'logout'])->name('logout');

Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('order_header', order_header::class);
Route::apiResource('order_part', order_part::class);
Route::apiResource('party', party::class);
Route::apiResource('person', person::class);
Route::apiResource('product', product::class);
// Route::apiResource('order_header', visitor_management_controller::class);
// Route::apiResource('order_header', visitor_management_controller::class);
