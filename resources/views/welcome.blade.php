<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineTix Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#14070d] text-white font-sans min-h-screen p-6">

    <div class="max-w-7xl mx-auto bg-[#1f1f1f] rounded-3xl p-6 shadow-2xl">
        <!-- Navbar -->
        <nav class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-10">
                <div class="text-2xl font-bold text-red-500">CineTix</div>
                <div class="flex gap-8 text-gray-300">
                    <a href="#home" class="hover:text-white transition">Dashboard</a>
                    <a href="#bioskop" class="hover:text-white transition">Bioskop</a>
                    <a href="#film" class="hover:text-white transition">Film</a>
                    <div class="relative group cursor-pointer">
                        <span class="hover:text-white transition">Genre</span>
                        <div
                            class="absolute hidden group-hover:block bg-[#2a2a2a] rounded-xl mt-2 py-2 w-40 shadow-lg z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-[#3a3a3a]">Action</a>
                            <a href="#" class="block px-4 py-2 hover:bg-[#3a3a3a]">Drama</a>
                            <a href="#" class="block px-4 py-2 hover:bg-[#3a3a3a]">Comedy</a>
                            <a href="#" class="block px-4 py-2 hover:bg-[#3a3a3a]">Horror</a>
                            <a href="#" class="block px-4 py-2 hover:bg-[#3a3a3a]">Sci-Fi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 relative">
                <input type="text" placeholder="Search" class="bg-[#121212] rounded-xl px-4 py-2 outline-none">

                @auth
                    <!-- Tampilan Jika Sudah Login -->
                    <div id="avatarBtn" class="w-10 h-10 rounded-full bg-yellow-400 cursor-pointer flex items-center justify-center text-black font-bold uppercase">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>

                    <div id="profileMenu"
                        class="hidden absolute right-0 top-14 bg-white text-black rounded-xl shadow-lg p-4 w-56 z-50">

                        <p class="font-bold">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>

                        <hr class="my-3">

                        <a href="/profile" class="block py-2 hover:text-red-500">
                            Profil Saya
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full mt-2 bg-red-600 text-white py-2 rounded-lg">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <!-- Tampilan Jika Belum Login -->
                    <div class="flex gap-2">
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-4 py-2">Login</a>
                        <a href="{{ route('register') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-xl font-semibold">Register</a>
                    </div>
                @endauth
            </div>
        </nav>

        <div class="grid grid-cols-12 gap-6">
            <!-- Main Content -->
            <div class="col-span-9 space-y-8">
                <!-- Hero Banner -->
                <section
                    class="relative rounded-3xl overflow-hidden h-80 bg-gradient-to-r from-black to-gray-700 flex items-center">
                    <img src="{{ asset('images/banner.jpg') }}" alt="Banner"
                        class="absolute inset-0 w-full h-full object-cover opacity-40">
                    <div class="relative z-10 p-10 max-w-lg">
                        <h1 class="text-4xl font-bold mb-4">Dune: Part Two</h1>
                        <p class="text-gray-300 mb-6">
                            Perjalanan epik berlanjut. Rasakan pengalaman menonton terbaik hanya di bioskop kami.
                        </p>
                        <button class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl font-semibold">
                            Pesan Sekarang
                        </button>
                    </div>
                </section>

                <!-- Film Terbaru -->
                <section>
                    <div class="flex justify-between mb-4">
                        <h2 class="text-2xl font-bold">Film Terbaru</h2>
                        <button class="text-gray-400">Lihat Semua</button>
                    </div>
                    <div class="grid md:grid-cols-4 gap-4">
                        @for ($i = 1; $i <= 4; $i++) 
                        <div class="bg-[#2a2a2a] rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition-transform">
                            <img src="{{ asset('images/film/movie'.$i.'.jpg') }}" alt="Movie"
                                class="w-full h-56 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold">Judul Film {{ $i }}</h3>
                                <p class="text-sm text-gray-400">Action, Adventure</p>
                                <p class="text-sm text-gray-500 mt-2">120 menit</p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </section>

                <!-- Rekomendasi -->
                <section>
                    <div class="flex justify-between mb-4">
                        <h2 class="text-2xl font-bold">Rekomendasi Untukmu</h2>
                        <button class="text-gray-400">Lihat Semua</button>
                    </div>
                    <div class="grid md:grid-cols-4 gap-4">
                        @for ($i = 5; $i <= 8; $i++) 
                        <div class="bg-[#2a2a2a] rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition-transform">
                            <img src="{{ asset('images/rekomendasi/rekomen'.$i.'.jpg') }}" alt="Movie"
                                class="w-full h-56 object-cover">
                            <div class="p-4">
                                <h3 class="font-semibold">Rekomendasi {{ $i }}</h3>
                                <p class="text-sm text-gray-400">Drama, Sci-Fi</p>
                                <p class="text-sm text-gray-500 mt-2">110 menit</p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <aside class="col-span-3 bg-[#2a2a2a] rounded-3xl p-5">
                <h2 class="text-2xl font-bold mb-6">Coming Soon</h2>

                @for ($i = 1; $i <= 3; $i++) 
                <div class="flex gap-4 mb-6">
                    <img src="{{ asset('images/coming/cs'.$i.'.jpg') }}" alt="Coming Soon"
                        class="w-20 h-28 rounded-xl object-cover">
                    <div>
                        <h3 class="font-semibold">Film Segera Tayang {{ $i }}</h3>
                        <p class="text-sm text-gray-400">Drama</p>
                        <p class="text-xs text-gray-500 mt-2">
                            Jangan lewatkan film terbaru yang segera hadir di bioskop.
                        </p>
                    </div>
                </div>
                @endfor

                <button
                    class="w-full mt-8 border border-gray-500 py-3 rounded-2xl hover:bg-white hover:text-black transition">
                    Lihat Lebih Banyak
                </button>
            </aside>
        </div>
    </div>

    <!-- SCRIPT -->
    <script>
        const avatar = document.getElementById('avatarBtn');
        const menu = document.getElementById('profileMenu');

        if(avatar) {
            avatar.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });
        }
    </script>

</body>

</html>