<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\FacilityController;

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
    Route::resource('facilities', FacilityController::class);
});

Route::middleware(['auth', 'customer'])->group(function () {
    Route::view('customer/dashboard', 'dashboard.customer')->name('customer.dashboard');
});