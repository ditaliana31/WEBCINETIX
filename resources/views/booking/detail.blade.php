@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- HEADER FILM -->
    <div class="grid md:grid-cols-3 gap-6 mb-10">

        <!-- POSTER -->
        <div>
            <img src="{{ asset('images/film/movie'.$id.'.jpg') }}"
                class="w-full h-[400px] object-cover rounded-2xl shadow-lg">
        </div>

        <!-- INFO -->
        <div class="md:col-span-2 flex flex-col justify-between">

            <div>
                <h1 class="text-3xl font-bold mb-3">
                    🎬 Film {{ $id }}
                </h1>

                <p class="text-gray-400 mb-3">
                    Action • Adventure • Sci-Fi
                </p>

                <p class="text-sm text-gray-500 mb-4">
                    ⏱ 120 Menit • ⭐ 8.5/10
                </p>

                <p class="text-gray-300 leading-relaxed">
                    Film ini menceritakan petualangan epik yang penuh aksi dan emosi.
                    Nikmati pengalaman menonton terbaik di bioskop pilihanmu.
                </p>
            </div>

            <!-- BUTTON BACK -->
            <a href="{{ route('booking.index') }}"
                class="mt-6 inline-block bg-gray-700 px-4 py-2 rounded-lg w-fit hover:bg-gray-600">
                ← Kembali ke Film
            </a>

        </div>

    </div>

    <!-- PILIH BIOSKOP -->
    <div>
        <h2 class="text-2xl font-bold mb-4">Pilih Bioskop</h2>

        <div class="grid md:grid-cols-2 gap-6">

            <!-- BIOSKOP 1 -->
            <div class="bg-[#1f1f1f] p-5 rounded-2xl shadow hover:shadow-xl transition">

                <h3 class="text-lg font-semibold mb-2">
                    Suzuya Tanjung Morawa XXI
                </h3>

                <p class="text-sm text-gray-400 mb-3">
                    Medan Mall • Dolby Atmos
                </p>

                <!-- JADWAL -->
                <div class="flex flex-wrap gap-2">
                    @foreach(['10:00','13:00','16:00','19:00'] as $jam)
                    <a href="{{ route('booking.kursi', $id) }}"
                        class="bg-gray-700 px-3 py-1 rounded-lg text-sm hover:bg-red-600">
                        {{ $jam }}
                    </a>
                    @endforeach
                </div>

            </div>

            <!-- BIOSKOP 2 -->
            <div class="bg-[#1f1f1f] p-5 rounded-2xl shadow hover:shadow-xl transition">

                <h3 class="text-lg font-semibold mb-2">
                    Thamrin XXI
                </h3>

                <p class="text-sm text-gray-400 mb-3">
                    Plaza Medan • Velvet Class
                </p>

                <!-- JADWAL -->
                <div class="flex flex-wrap gap-2">
                    @foreach(['11:00','14:00','17:00','20:00'] as $jam)
                    <a href="{{ route('booking.kursi', $id) }}"
                        class="bg-gray-700 px-3 py-1 rounded-lg text-sm hover:bg-red-600">
                        {{ $jam }}
                    </a>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

</div>

@endsection