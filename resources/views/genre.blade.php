<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>WEBNETIX - Genre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
    body {
        background-color: #141414;
        color: white;
        font-family: 'Segoe UI', sans-serif;
    }

    .genre-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 25px;
    }

    .movie-card {
        background-color: #1c1c1c;
        border-radius: 15px;
        overflow: hidden;
        transition: 0.3s;
    }

    .movie-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    }

    /* 🔥 GAMBAR FULL (TIDAK SETENGAH) */
    .movie-img {
        width: 100%;
        height: 300px;       /* tinggi poster */
        object-fit: cover;   /* isi penuh card */
        display: block;
    }

    .movie-body {
        padding: 15px;
    }

    .movie-title {
        font-size: 16px;
        font-weight: bold;
    }

    .movie-info {
        font-size: 13px;
        color: #bbb;
    }

    .badge-genre {
        background-color: red;
        padding: 4px 10px;
        border-radius: 8px;
        font-size: 11px;
        display: inline-block;
        margin-top: 5px;
    }
</style>
</head>
<body>

<div class="container mt-5">

    <!-- JUDUL -->
    <div class="genre-title text-capitalize">
         {{ $genre ?? 'Semua Film' }}
    </div>

    @php
$films = [
    [
        'title' => 'AYAH,INI ARAHNYA KEMANA, YA?',
        'genre' => 'action',
        'durasi' => '120 menit',
    'img' => asset('images/film/movie1.jpg')
    
    ],
    [
        'title' => 'JADI TUH BARANG',
        'genre' => 'action',
        'durasi' => '120 menit',
     'img' => asset('images/film/movie2.jpg')
     
    ],
    [
        'title' => 'Titanic',
        'genre' => 'drama',
        'durasi' => '150 menit',
'img' => asset('images/film/drama1.jpg')    ],
    [
        'title' => 'Joker',
        'genre' => 'drama',
        'durasi' => '122 menit',
        'img' => asset('images/film/drama2.jpg')
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
];
@endphp

    <div class="row g-4">

        @foreach($films as $film)

            @if(!$genre || $genre == $film['genre'])

            <div class="col-md-3 col-sm-6">
                <div class="movie-card">

                    <!-- FOTO -->
                    <img src="{{ $film['img'] }}" class="movie-img">

                    <!-- BODY -->
                    <div class="movie-body">

                        <div class="movie-title">
                            {{ $film['title'] }}
                        </div>

                        <div class="badge-genre text-uppercase">
                            {{ $film['genre'] }}
                        </div>

                        <div class="movie-info mt-2">
                            ⏱ {{ $film['durasi'] }}
                        </div>

                    </div>

                </div>
            </div>

            @endif

        @endforeach

    </div>

</div>

</body>
</html>