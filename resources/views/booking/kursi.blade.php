@extends('layouts.blank')

@section('content')

<div class="max-w-4xl mx-auto text-center">

    <h1 class="text-3xl font-bold mb-6">Pilih Kursi</h1>

    <!-- SCREEN -->
    <div class="mb-10">
        <div class="bg-gray-300 text-black py-2 rounded-lg w-2/3 mx-auto shadow">
            SCREEN
        </div>
    </div>

    <form action="{{ route('booking.checkout') }}" method="POST">
        @csrf

        <!-- KURSI -->
        <div class="space-y-4">

            @php
            $rows = ['A','B','C','D','E','F'];
            $cols = 8;

            // contoh kursi sudah terisi
            $booked = ['A3','B4','C5','D2','E6'];
            @endphp

            @foreach ($rows as $row)
            <div class="flex justify-center items-center gap-2">

                <!-- Label Baris -->
                <span class="w-6">{{ $row }}</span>

                @for ($i = 1; $i <= $cols; $i++) @php $seat=$row.$i; $isBooked=in_array($seat, $booked); @endphp <label
                    class="relative">

                    <input type="checkbox" name="kursi[]" value="{{ $seat }}" class="hidden peer"
                        {{ $isBooked ? 'disabled' : '' }}>

                    <!-- Kursi -->
                    <div class="w-10 h-10 flex items-center justify-center text-sm rounded-md cursor-pointer
                            
                            {{ $isBooked ? 'bg-red-600 cursor-not-allowed' : 'bg-green-600' }}
                            
                            peer-checked:bg-yellow-400 peer-checked:text-black
                            
                            hover:scale-110 transition">

                        {{ $i }}

                    </div>

                    </label>
                    @endfor

            </div>
            @endforeach

        </div>

        <!-- LEGEND -->
        <div class="flex justify-center gap-6 mt-8 text-sm">
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 bg-green-600 rounded"></div> Tersedia
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 bg-red-600 rounded"></div> Terisi
            </div>
            <div class="flex items-center gap-2">
                <div class="w-4 h-4 bg-yellow-400 rounded"></div> Dipilih
            </div>
        </div>

        <!-- BUTTON -->
        <button class="mt-8 bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl font-semibold transition">
            Lanjut ke Pembayaran
        </button>

    </form>

</div>

@endsection