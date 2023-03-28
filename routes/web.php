<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminArtistController;
use App\Http\Controllers\Admin\AdminMethodController;
use App\Http\Controllers\Admin\AdminCountryController;
use App\Http\Controllers\Admin\AdminLocationController;
use App\Http\Controllers\Admin\AdminMovementController;
use App\Http\Controllers\Admin\AdminPaintingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resources([
        'paintings' => AdminPaintingController::class,
        'artists' => AdminArtistController::class,
        'methods' => AdminMethodController::class,
        'movements' => AdminMovementController::class,
        'locations' => AdminLocationController::class,
        'countries' =>AdminCountryController:: class,
    ]);
});



