<nav class="flex items-center justify-between mb-8 relative z-50">

    <!-- LEFT -->
    <div class="flex items-center gap-10">

        <div class="text-2xl font-bold text-red-500">
            CineTix
        </div>

        <div class="flex gap-8 text-gray-300">

            <a href="/" class="hover:text-white transition">Home</a>

            <a href="/bioskop" class="hover:text-white transition">
                Bioskop
            </a>

            <a href="{{ route('booking.index') }}" class="hover:text-white transition">
                Film
            </a>

            <!-- DROPDOWN GENRE -->
            <div class="relative group cursor-pointer">

                <span class="hover:text-white transition">
                    Genre
                </span>

                <div class="absolute left-0 hidden group-hover:block bg-[#2a2a2a] rounded-xl mt-2 py-2 w-40 shadow-lg z-50">

                    <a href="{{ url('/genre/action') }}" class="block px-4 py-2 hover:bg-[#3a3a3a]">Action</a>
                    <a href="{{ url('/genre/drama') }}" class="block px-4 py-2 hover:bg-[#3a3a3a]">Drama</a>
                    <a href="{{ url('/genre/comedy') }}" class="block px-4 py-2 hover:bg-[#3a3a3a]">Comedy</a>
                    <a href="{{ url('/genre/horror') }}" class="block px-4 py-2 hover:bg-[#3a3a3a]">Horror</a>
                    <a href="{{ url('/genre/scifi') }}" class="block px-4 py-2 hover:bg-[#3a3a3a]">Sci-Fi</a>

                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-4 relative">

        <!-- SEARCH -->
        <form action="{{ route('booking.index') }}" method="GET" class="flex gap-2">

            <input type="text" name="search" placeholder="Cari film..."
                class="bg-[#121212] rounded-xl px-4 py-2 outline-none text-sm text-white">

            <button type="submit"
                class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-xl text-sm">
                Cari
            </button>

        </form>

        @auth
            <!-- Avatar -->
            <div id="avatarBtn"
                class="w-10 h-10 rounded-full bg-yellow-400 cursor-pointer flex items-center justify-center text-black font-bold uppercase">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>

            <!-- Profile Menu -->
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
            <!-- Guest -->
            <div class="flex gap-2">
                <a href="{{ route('login') }}"
                    class="text-gray-300 hover:text-white px-4 py-2">
                    Login
                </a>

                <a href="{{ route('register') }}"
                    class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-xl font-semibold">
                    Register
                </a>
            </div>
        @endauth

    </div>

</nav>

<script>
    const avatarBtn = document.getElementById('avatarBtn');
    const profileMenu = document.getElementById('profileMenu');

    if (avatarBtn) {
        avatarBtn.addEventListener('click', function () {
            profileMenu.classList.toggle('hidden');
        });
    }
</script>