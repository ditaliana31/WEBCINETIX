@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">


    <!-- GRID FILM -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @php
        $search = request('search');
        @endphp

        @for($i = 1; $i <= 6; $i++) @php $judul="Film $i" ; @endphp {{-- FILTER SEARCH --}} @if(!$search ||
            str_contains(strtolower($judul), strtolower($search))) <div
            class="bg-[#1f1f1f] rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">

            <!-- Poster -->
            <div class="relative">
                <img src="{{ asset('images/film/movie'.$i.'.jpg') }}" class="w-full h-64 object-cover">

                <span class="absolute top-2 left-2 bg-yellow-400 text-black text-xs px-2 py-1 rounded">
                    ⭐ {{ rand(7,9) }}.{{ rand(0,9) }}
                </span>
            </div>

            <!-- Info -->
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-1">
                    {{ $judul }}
                </h3>

                <p class="text-sm text-gray-400">
                    Action • Adventure
                </p>

                <p class="text-xs text-gray-500 mt-1">
                    ⏱ {{ rand(100,140) }} menit
                </p>

                <a href="{{ route('booking.show', $i) }}"
                    class="mt-4 block text-center bg-red-600 hover:bg-red-700 py-2 rounded-lg text-sm font-semibold transition">
                    Pesan Tiket
                </a>
            </div>

    </div>

    @endif

    @endfor

</div>

</div>

@endsection