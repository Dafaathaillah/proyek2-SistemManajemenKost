<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\LoginAuthController;
use App\Http\Controllers\Api\AuthController;


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

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('messages', MessageController::class);
// });
Route::post('auth/login', [LoginAuthController::class, 'login']);

Route::apiResource('messages', MessageController::class);
Route::post('auth/login', [AuthController::class, 'login']);
