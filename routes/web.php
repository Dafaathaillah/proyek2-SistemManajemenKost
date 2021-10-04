<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;

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
    return redirect('login');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('admin/dashboard', 'dashboard.admin')->name('admin.dashboard');
    Route::resource('boardingHouses', BoardingHouseController::class);
    Route::get('regencies/{id}', [RegencyController::class, 'index']);
    Route::get('districts/{id}', [DistrictController::class, 'index']);
    Route::get('villages/{id}', [VillageController::class, 'index']);
    Route::resource('facilities', FacilityController::class);
    Route::resource('roomTypes', RoomTypeController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('customers', CustomerController::class);
});

Route::middleware(['auth', 'customer'])->group(function () {
    Route::view('customer/dashboard', 'dashboard.customer')->name('customer.dashboard');
});