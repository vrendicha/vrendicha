<x-guest-layout>
    <!-- Logo -->
    <div class="flex justify-center mt-6 mb-6">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Dina Parfum" class="h-16 rounded-full shadow-lg">
        </a>
    </div>

    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda dengan mengeklik link yang baru saja kami kirim.') }}
    </div>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Link verifikasi baru telah dikirim ke alamat email Anda.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Kirim Ulang Email Verifikasi') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</x-guest-layout>
