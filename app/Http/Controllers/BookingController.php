<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookingController extends Controller
{
    // daftar film
    public function index()
    {
        return view('booking.film');
    }

    // detail film + pilih bioskop
    public function show($id)
    {
        return view('booking.detail', compact('id'));
    }

    // pilih kursi
    public function kursi($id)
    {
        return view('booking.kursi', compact('id'));
    }

    // checkout
    public function checkout(Request $request)
    {
        $kursi = $request->kursi ?? [];
        return view('booking.checkout', compact('kursi'));
    }

    // tiket
    public function tiket($id)
    {
        return view('booking.tiket', compact('id'));
    }
}