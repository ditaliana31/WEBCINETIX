@extends('layouts.blank')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-3xl font-bold mb-6">Konfirmasi Pemesanan</h1>

    <!-- CARD -->
    <div class="bg-[#1f1f1f] rounded-2xl p-6 shadow-lg">

        <!-- FILM -->
        <div class="flex gap-4 mb-6">
            <img src="{{ asset('images/film/movie1.jpg') }}" class="w-24 h-32 object-cover rounded-lg">

            <div>
                <h2 class="text-xl font-semibold">Dune: Part Two</h2>
                <p class="text-gray-400 text-sm">XXI Mall • Studio 1</p>
                <p class="text-gray-500 text-sm">19:00 WIB</p>
            </div>
        </div>

        <hr class="border-gray-700 mb-4">

        <!-- DETAIL -->
        <div class="space-y-2 text-sm">

            <div class="flex justify-between">
                <span>Kursi</span>
                <span class="font-semibold">
                    {{ implode(', ', $kursi) }}
                </span>
            </div>

            <div class="flex justify-between">
                <span>Jumlah Tiket</span>
                <span>{{ count($kursi) }}</span>
            </div>

            @php
            $harga = 35000;
            $total = count($kursi) * $harga;
            @endphp

            <div class="flex justify-between">
                <span>Harga per Tiket</span>
                <span>Rp {{ number_format($harga, 0, ',', '.') }}</span>
            </div>

            <div class="flex justify-between text-lg font-bold mt-4">
                <span>Total</span>
                <span class="text-green-400">
                    Rp {{ number_format($total, 0, ',', '.') }}
                </span>
            </div>

        </div>

        <!-- BUTTON -->
        <a href="{{ route('booking.tiket', 1) }}"
            class="mt-6 block text-center bg-green-500 hover:bg-green-600 py-3 rounded-xl font-semibold transition">
            Bayar Sekarang
        </a>

    </div>

    <!-- BACK -->
    <a href="{{ route('booking.index') }}" class="block mt-6 text-center text-gray-400 hover:text-white">
        ← Kembali pilih film
    </a>

</div>

@endsection