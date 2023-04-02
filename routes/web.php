<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Admin\AdminColorController;
use App\Http\Controllers\Admin\AdminFrameController;
use App\Http\Controllers\Front\FrontAboutController;
use App\Http\Controllers\Admin\AdminArtistController;
use App\Http\Controllers\Admin\AdminMethodController;
use App\Http\Controllers\Front\FrontContactController;
use App\Http\Controllers\Admin\AdminLocationController;
use App\Http\Controllers\Admin\AdminMovementController;
use App\Http\Controllers\Admin\AdminPaintingController;
use App\Http\Controllers\Front\FrontPaintingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resources([
        'paintings' => AdminPaintingController::class,
        'artists' => AdminArtistController::class,
        'methods' => AdminMethodController::class,
        'movements' => AdminMovementController::class,
        'locations' => AdminLocationController::class,
        'colors' => AdminColorController::class,
        'frames' => AdminFrameController::class,
    ]);
});

Route::name('front.')->group( function () {
    Route::get('/', [FrontHomeController:: class, 'index'])->name('home');
    Route::get('/about', [FrontAboutController::class, 'index'])->name('about');
    Route::get('/contact', [FrontContactController::class, 'index'])->name('contact');
    Route::resource('paintings', FrontPaintingController::class)->only(['index','show']);
});




