<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white leading-tight">
            Keranjang Belanja
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md overflow-hidden">

                @if (session('success'))
                    <div class="mb-4 text-green-600 font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($cartItems->isEmpty())
                    <p class="text-center text-gray-600 dark:text-gray-300 py-6">Keranjang masih kosong.</p>
                @else
                    <div class="space-y-6">
                        @foreach ($cartItems as $item)
                            <div class="flex items-center gap-4 border-b pb-4">
                                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-24 h-24 object-contain rounded border">
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                        {{ $item->product->name }}
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">
                                        Rp{{ number_format($item->product->price, 0, ',', '.') }} x {{ $item->quantity }}
                                    </p>
                                    <p class="text-sm font-semibold text-purple-600 mt-1">
                                        Subtotal: Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                                    </p>
                                </div>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:text-red-800 font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 text-right">
                        <p class="text-xl font-bold text-purple-700 mb-4">
                            Total: Rp{{ number_format($total, 0, ',', '.') }}
                        </p>

                        <form action="{{ route('cart.clear') }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded mr-2">
                                Kosongkan Keranjang
                            </button>
                        </form>

                        <a href="{{ route('checkout.confirm') }}"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                            Checkout Sekarang
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
