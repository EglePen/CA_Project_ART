<?php

use Illuminate\Support\Facades\Route;

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
        'medium' => AdminMediumController::class,
        'movements' => AdminMovementController::class,
        'locations' => AdminLocationController::class,
        'countries_of_origin' =>AdminCountryOfriginController:: class,
    ]);
});

// Route::name('front.')->group( function () {
//     Route::get('/', [FrontHomeController::class, 'index'])->name('home');
//     Route::resource('movies', FrontMovieController::class)->only(['index','show']);

// });

