<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-black relative overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c"
                 class="w-full h-full object-cover opacity-30"
                 alt="Cinema Background">
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black"></div>

        <!-- Register Card -->
        <div class="relative z-10 w-full max-w-md px-8 py-10 bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20">

            <!-- Brand -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white tracking-wider">
                    CineTix
                </h1>
                <p class="text-gray-300 mt-2 text-sm">
                    Buat akun dan mulai pesan tiket bioskop favoritmu
                </p>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-red-400" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-white mb-2 text-sm">Nama Lengkap</label>
                    <x-input id="name"
                        class="block w-full rounded-xl border-0 bg-white/20 text-white placeholder-gray-300"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        placeholder="Masukkan nama lengkap" />
                </div>

                <!-- Email -->
                <div class="mt-5">
                    <label class="block text-white mb-2 text-sm">Email</label>
                    <x-input id="email"
                        class="block w-full rounded-xl border-0 bg-white/20 text-white placeholder-gray-300"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        placeholder="Masukkan email" />
                </div>

                <!-- Password -->
                <div class="mt-5">
                    <label class="block text-white mb-2 text-sm">Password</label>
                    <x-input id="password"
                        class="block w-full rounded-xl border-0 bg-white/20 text-white placeholder-gray-300"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Masukkan password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-5">
                    <label class="block text-white mb-2 text-sm">Konfirmasi Password</label>
                    <x-input id="password_confirmation"
                        class="block w-full rounded-xl border-0 bg-white/20 text-white placeholder-gray-300"
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="Ulangi password" />
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full mt-6 bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold transition duration-300">
                    Daftar Sekarang
                </button>

                <!-- Login Link -->
                <div class="text-center mt-6">
                    <p class="text-gray-400 text-sm">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-red-400 hover:text-red-300 font-semibold">
                            Login di sini
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>