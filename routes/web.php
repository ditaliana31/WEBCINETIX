<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// 👑 ADMIN AREA
Route::middleware(['auth', 'role:admin'])->group(function () {

    // DASHBOARD ADMIN
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

    // ❗ FIX: jangan text lagi, pakai view
    Route::get('/kasir', function () {
        return view('kasir.dashboard');
    });

});