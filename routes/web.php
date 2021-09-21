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
    return redirect('login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard.index')->name('dashboard');
    Route::prefix('elements')->group(function () {
        Route::view('table', 'elements.tables')->name('elements.table');
        Route::view('form', 'elements.forms')->name('elements.form');
    });
});
