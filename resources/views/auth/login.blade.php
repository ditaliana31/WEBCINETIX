<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-black relative overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba"
                 class="w-full h-full object-cover opacity-30"
                 alt="Cinema Background">
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black"></div>

        <!-- Login Card -->
        <div class="relative z-10 w-full max-w-md px-8 py-10 bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20">

            <!-- Logo / Brand -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-white tracking-wider">
                    CineTix
                </h1>
                <p class="text-gray-300 mt-2 text-sm">
                    Login untuk pesan tiket film favoritmu
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-400" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-red-400" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-white mb-2 text-sm">Email</label>
                    <x-input id="email"
                        class="block w-full rounded-xl border border-gray-500 bg-black/40 !text-white placeholder:text-gray-400 focus:border-red-500 focus:ring-red-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        placeholder="Masukkan email" />
                </div>

                <!-- Password -->
                <div class="mt-5">
                    <label class="block text-white mb-2 text-sm">Password</label>
                    <x-input id="password"
                        class="block w-full rounded-xl border border-gray-500 bg-black/40 !text-white placeholder:text-gray-400 focus:border-red-500 focus:ring-red-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Masukkan password" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mt-4">
                    <label class="flex items-center text-white text-sm">
                        <input type="checkbox" name="remember" class="mr-2 rounded">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-red-400 hover:text-red-300"
                           href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full mt-6 bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold transition duration-300">
                    Login
                </button>

                <!-- Register -->
                <div class="text-center mt-6">
                    <p class="text-white text-sm">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-red-400 hover:text-red-300 font-semibold">
                            Daftar sekarang
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>