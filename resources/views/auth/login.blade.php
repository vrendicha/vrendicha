<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100">
        <div class="bg-white/60 backdrop-blur-lg rounded-xl shadow-xl w-full max-w-md p-8">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Dina Parfum" class="h-23">
            </div>

            <h2 class="text-center text-2xl font-bold text-gray-800 mb-4">Masuk ke Dina Parfum</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus class="block mt-1 w-full" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password" required class="block mt-1 w-full" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">Ingat saya</label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-purple-600 hover:underline">Lupa kata sandi?</a>
                    @endif

                    <x-primary-button class="ml-3 bg-purple-500 hover:bg-purple-600">
                        {{ __('Masuk') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
