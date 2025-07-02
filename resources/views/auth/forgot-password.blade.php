<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mt-6 mb-6">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Dina Parfum" class="h-16 rounded-full shadow-lg">
        </a>
    </div>

    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Masukkan email Anda dan kami akan mengirimkan tautan untuk mereset password.') }}
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Kirim Link Reset') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
