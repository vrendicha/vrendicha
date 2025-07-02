<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white leading-tight">
            List Produk
        </h2>
    </x-slot>

    <div class="py-10 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-contain bg-white p-4">

                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300 mb-1">{{ $product->description }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Stok: {{ $product->stock }}</p>
                            <p class="text-lg font-bold text-purple-600 dark:text-purple-400">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                            <div class="mt-4 space-y-2">
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md transition">+ Tambah ke Keranjang</button>
                                </form>

                                @if ($product->stock > 0)
                                    <a href="{{ route('checkout.buyNow.confirm', $product->id) }}"
                                       class="w-full text-center bg-green-600 hover:bg-green-700 text-white text-sm py-2 rounded-md block transition">
                                       Beli
                                    </a>
                                @else
                                    <span class="block text-center text-xs text-red-500">Stok Habis</span>
                                @endif

                                <a href="https://wa.me/6283874740127?text=Halo%20Admin,%20saya%20tertarik%20dengan%20{{ urlencode($product->name) }}"
                                   target="_blank"
                                   class="w-full text-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm py-2 rounded-md flex items-center justify-center gap-1 hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                    💬 Chat Admin
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
