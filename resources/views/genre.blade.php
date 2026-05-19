@extends('layouts.app')

@section('content')

@php
$films = [
    [
        'title' => 'AYAH, INI ARAHNYA KEMANA, YA?',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/movie1.jpg')
    ],
     [
        'title' => 'JURASSIC PARK',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action1.jpg')
    ],
     [
        'title' => 'LEON',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action2.jpg')
    ],
     [
        'title' => 'THE DARK KNIGHT',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action3.jpg')
    ],
    
     [
        'title' => 'INCEPTION',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action4.jpg')
    ],
     [
        'title' => 'THE MATRIX',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action5.jpg')
    ],
     [
        'title' => 'GLADIATOR',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action6.jpg')
    ],
    [
        'title' => 'JADI TUH BARANG',
        'genre' => 'action',
        'durasi' => '103 menit',
        'img' => asset('images/film/movie2.jpg')
    ],
    [
        'title' => 'AYAH, INI ARAHNYA KEMANA, YA?',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/movie1.jpg')
    ],
     [
        'title' => 'JURASSIC PARK',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action1.jpg')
    ],
     [
        'title' => 'LEON',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action2.jpg')
    ],
     [
        'title' => 'THE DARK KNIGHT',
        'genre' => 'action',
        'durasi' => '120 menit',
        'img' => asset('images/film/action3.jpg')
    ],
    [
        'title' => 'Titanic',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama1.jpg')
    ],
    [
        'title' => 'Joker',
        'genre' => 'drama',
        'durasi' => '122 menit',
        'img' => asset('images/film/drama2.jpg')
    ],
    [
        'title' => 'HABIBIE & AINUN',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama3.jpg')
    ],
    [
        'title' => 'AYAT AYAT CINTA',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama4.jpg')
    ],
     [
        'title' => 'Love For Sale',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama5.jpg')
    ],
     [
        'title' => 'DILLAN 1991',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama6.jpg')
    ],
     [
        'title' => 'ADA APA DENGAN CINTA',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama7.jpg')
    ],
     [
        'title' => '5 CM',
        'genre' => 'drama',
        'durasi' => '150 menit',
        'img' => asset('images/film/drama8.jpg')
    ],
    [
        'title' => 'Mr Bean',
        'genre' => 'comedy',
        'durasi' => '90 menit',
        'img' => asset('images/film/comedy1.jpg')
    ],
    [
        'title' => 'The Mask',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy2.jpg')
    ],
    [
        'title' => 'KEJAR MIMPI GASPOL',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy3.jpg')
    ],
    [
        'title' => 'HANGOUT',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy4.jpg')
    ],
    [
        'title' => 'AGAK LAEN',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy5.jpg')
    ],
    [
        'title' => 'NGERI NGERI SEDAP',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy6.jpg')
    ],
    [
        'title' => 'CEK TOKO SEBELAH',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy7.jpg')
    ],
    [
        'title' => 'GANJIL GENAP',
        'genre' => 'comedy',
        'durasi' => '95 menit',
        'img' => asset('images/film/comedy8.jpg')
    ],
    [
        'title' => 'Conjuring',
        'genre' => 'horror',
        'durasi' => '110 menit',
        'img' => asset('images/film/horror1.jpg')
    ],
    [
        'title' => 'Insidious',
        'genre' => 'horror',
        'durasi' => '105 menit',
        'img' => asset('images/film/horror2.jpg')
    ],
      [
        'title' => 'Conjuring',
        'genre' => 'horror',
        'durasi' => '110 menit',
        'img' => asset('images/film/horror1.jpg')
    ],
    [
        'title' => 'Insidious',
        'genre' => 'horror',
        'durasi' => '105 menit',
        'img' => asset('images/film/horror2.jpg')
    ],
      [
        'title' => 'Conjuring',
        'genre' => 'horror',
        'durasi' => '110 menit',
        'img' => asset('images/film/horror1.jpg')
    ],
    [
        'title' => 'Insidious',
        'genre' => 'horror',
        'durasi' => '105 menit',
        'img' => asset('images/film/horror2.jpg')
    ],
      [
        'title' => 'Conjuring',
        'genre' => 'horror',
        'durasi' => '110 menit',
        'img' => asset('images/film/horror1.jpg')
    ],
    [
        'title' => 'Insidious',
        'genre' => 'horror',
        'durasi' => '105 menit',
        'img' => asset('images/film/horror2.jpg')
    ],
    
    [
        'title' => 'Interstellar',
        'genre' => 'scifi',
        'durasi' => '169 menit',
        'img' => asset('images/film/scifi1.jpg')
    ],
    [
        'title' => 'Avatar',
        'genre' => 'scifi',
        'durasi' => '162 menit',
        'img' => asset('images/film/scifi2.jpg')
    ],
     [
        'title' => 'Interstellar',
        'genre' => 'scifi',
        'durasi' => '169 menit',
        'img' => asset('images/film/scifi1.jpg')
    ],
    [
        'title' => 'Avatar',
        'genre' => 'scifi',
        'durasi' => '162 menit',
        'img' => asset('images/film/scifi2.jpg')
    ],
     [
        'title' => 'Interstellar',
        'genre' => 'scifi',
        'durasi' => '169 menit',
        'img' => asset('images/film/scifi1.jpg')
    ],
    [
        'title' => 'Avatar',
        'genre' => 'scifi',
        'durasi' => '162 menit',
        'img' => asset('images/film/scifi2.jpg')
    ],
     [
        'title' => 'Interstellar',
        'genre' => 'scifi',
        'durasi' => '169 menit',
        'img' => asset('images/film/scifi1.jpg')
    ],
    [
        'title' => 'Avatar',
        'genre' => 'scifi',
        'durasi' => '162 menit',
        'img' => asset('images/film/scifi2.jpg')
    ],
];
@endphp

<!-- JUDUL -->
<h2 class="text-2xl font-bold mb-6">
    {{ ucfirst($genre ?? 'Semua Film') }}
</h2>

<!-- GRID FILM -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    @foreach($films as $film)

        @if(!$genre || $genre == $film['genre'])

        <div class="relative bg-[#2a2a2a] rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition duration-300">

            <!-- RATING -->
            <div class="absolute top-2 left-2 bg-yellow-400 text-black text-xs px-2 py-1 rounded">
                ⭐ 9.0
            </div>

            <!-- GAMBAR -->
            <img src="{{ $film['img'] }}" class="w-full h-[260px] object-cover">

            <!-- ISI -->
            <div class="p-4">

                <h3 class="font-semibold text-sm mb-2">
                    {{ strtoupper($film['title']) }}
                </h3>

                <!-- GENRE -->
                <span class="bg-red-600 text-xs px-2 py-1 rounded">
                    {{ strtoupper($film['genre']) }}
                </span>

                <!-- DURASI -->
                <div class="text-gray-400 text-xs mt-2">
                    ⏱ {{ $film['durasi'] }}
                </div>

                <!-- BUTTON -->
                <button class="mt-4 w-full bg-red-600 hover:bg-red-700 py-2 rounded-lg text-sm">
                    Pesan Tiket
                </button>

            </div>

        </div>

        @endif

    @endforeach

</div>

@endsection