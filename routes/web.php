<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
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


// 👑 ADMIN AREA
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    // CRUD FILM
    Route::get('/film', [FilmController::class, 'index']);
    Route::get('/film/create', [FilmController::class, 'create']);
    Route::post('/film', [FilmController::class, 'store']);
});


// 🎟️ KASIR AREA
Route::middleware(['auth', 'role:kasir'])->group(function () {

    Route::get('/kasir', function () {
        return view('kasir.dashboard');
    });

});