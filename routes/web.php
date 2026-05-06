<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| 🎬 BOOKING SYSTEM
|--------------------------------------------------------------------------
*/

Route::prefix('booking')->group(function () {

    // 🔥 daftar film (INI YANG DIPAKAI NAVBAR)
    Route::get('/', [BookingController::class, 'index'])
        ->name('booking.index');

    // detail film + pilih bioskop
    Route::get('/film/{id}', [BookingController::class, 'show'])
        ->name('booking.show');

    // pilih kursi
    Route::get('/kursi/{id}', [BookingController::class, 'kursi'])
        ->name('booking.kursi');

    // checkout
    Route::post('/checkout', [BookingController::class, 'checkout'])
        ->name('booking.checkout');

    // tiket
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
