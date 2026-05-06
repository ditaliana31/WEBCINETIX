<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

// 🔥 HALAMAN AWAL
Route::get('/', function () {
    return view('welcome');
});

// 🔥 BIOSKOP (PUBLIC)
Route::get('/bioskop', [BioskopController::class, 'index']);

// 🔐 AUTH (LOGIN REGISTER)
Auth::routes();

// 🏠 HOME (SETELAH LOGIN)
Route::get('/home', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| 🎬 BOOKING SYSTEM
|--------------------------------------------------------------------------
*/

Route::prefix('booking')->group(function () {

    Route::get('/', [BookingController::class, 'index'])
        ->name('booking.index');

    Route::get('/film/{id}', [BookingController::class, 'show'])
        ->name('booking.show');

    Route::get('/kursi/{id}', [BookingController::class, 'kursi'])
        ->name('booking.kursi');

    Route::post('/checkout', [BookingController::class, 'checkout'])
        ->name('booking.checkout');

    Route::get('/tiket/{id}', [BookingController::class, 'tiket'])
        ->name('booking.tiket');
});

/*
|--------------------------------------------------------------------------
| 👑 ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/film', [FilmController::class, 'index']);
    Route::get('/film/create', [FilmController::class, 'create']);
    Route::post('/film', [FilmController::class, 'store']);
});

/*
|--------------------------------------------------------------------------
| 🎟️ KASIR AREA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:kasir'])->prefix('kasir')->group(function () {

    Route::get('/', function () {
        return view('kasir.dashboard');
    });

});

/*
|--------------------------------------------------------------------------
| 🎬 GENRE (PUBLIC ROUTE - FIXED)
|--------------------------------------------------------------------------
*/

Route::get('/genre/{genre?}', function ($genre = null) {
    return view('genre', compact('genre'));
});