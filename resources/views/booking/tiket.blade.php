@extends('layouts.blank')

@section('content')

<div class="max-w-xl mx-auto">

    <!-- TITLE -->
    <h1 class="text-3xl font-bold text-center mb-6">
        Tiket Berhasil
    </h1>

    <!-- CARD TIKET -->
    <div class="bg-[#1f1f1f] rounded-3xl shadow-2xl overflow-hidden">

        <!-- HEADER -->
        <div class="bg-red-600 text-center py-3 font-bold text-lg">
            CineTix E-Ticket
        </div>

        <!-- BODY -->
        <div class="p-6 space-y-3">

            <div class="flex justify-between">
                <span class="text-gray-400">Kode Booking</span>
                <span class="font-bold">
                    #CT{{ $id ?? rand(10000,99999) }}
                </span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-400">Film</span>
                <span>{{ $film ?? 'Dune: Part Two' }}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-400">Bioskop</span>
                <span>{{ $bioskop ?? 'XXI Mall' }}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-400">Jam</span>
                <span>{{ $jam ?? '19:00 WIB' }}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-400">Kursi</span>
                <span class="font-semibold">
                    {{ $kursi ?? 'A1, A2' }}
                </span>
            </div>

        </div>

        <!-- GARIS PUTUS -->
        <div class="border-t border-dashed border-gray-600 mx-6"></div>

        <!-- BARCODE DUMMY (AMAN) -->
        <div class="p-6 text-center">

            @php
            $bars = range(1,50);
            @endphp

            <div class="flex justify-center items-end gap-[2px] h-16">
                @foreach($bars as $b)
                <div class="bg-white" style="width:2px; height:{{ rand(25,60) }}px;">
                </div>
                @endforeach
            </div>

            <p class="text-xs text-gray-400 mt-3">
                Scan barcode ini di pintu masuk bioskop
            </p>

        </div>

    </div>

    <!-- BUTTON -->
    <a href="{{ route('booking.index') }}"
        class="block mt-6 text-center bg-red-600 hover:bg-red-700 py-3 rounded-xl font-semibold transition">
        Pesan Lagi
    </a>

</div>

@endsection