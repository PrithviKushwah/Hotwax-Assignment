<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\order_header;

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

Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('order_header', order_header::class);
// Route::apiResource('order_header', visitor_management_controller::class);
// Route::apiResource('order_header', visitor_management_controller::class);
// Route::apiResource('order_header', visitor_management_controller::class);
// Route::apiResource('order_header', visitor_management_controller::class);
