<!DOCTYPE html>
<html>
<head>
    <title>Bioskop Medan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#14070d] text-white p-6">

<div class="max-w-6xl mx-auto">

    

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($bioskops as $b)
        <div class="bg-[#2a2a2a] p-5 rounded-2xl shadow">

            <h2 class="text-lg font-bold">{{ $b['nama'] }}</h2>

            <p class="text-gray-400 mt-2">
                📍 {{ $b['alamat'] }}
            </p>

            <p class="text-gray-500 text-sm">
                ☎ {{ $b['telp'] }}
            </p>

            <span class="inline-block mt-3 px-3 py-1 bg-yellow-400 text-black text-xs rounded-full">
                {{ $b['tipe'] }}
            </span>

        </div>
        @endforeach
    </div>

</div>

</body>
</html>