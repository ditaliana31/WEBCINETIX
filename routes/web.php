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

// 🔥 HALAMAN BIOSKOP (PUBLIC - TANPA LOGIN)
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

    // daftar film
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
