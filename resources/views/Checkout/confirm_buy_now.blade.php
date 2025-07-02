<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white animate-pulse">
            🛍️ Konfirmasi Pembelian
        </h2>
    </x-slot>

    <div class="py-10 max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-[1.01]">
            <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-white">🧾 Produk yang Anda Beli</h3>

            <div class="flex gap-4 mb-6">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                     class="w-32 h-32 object-cover rounded border shadow" />

                <div>
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $product->name }}</h4>
                    <p class="text-gray-600 dark:text-gray-300">{{ $product->description }}</p>
                    <p class="text-purple-600 font-bold text-lg mt-1">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </div>

            <form action="{{ route('checkout.buyNow', $product->id) }}" method="POST">
                @csrf

                {{-- Jumlah --}}
                <div class="mb-4">
                    <label for="quantity" class="block font-medium text-sm text-gray-700 dark:text-gray-200">
                        📦 Jumlah Barang
                    </label>
                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}"
                           class="mt-1 w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                </div>

                {{-- Metode Pembayaran --}}
                <div class="mb-6">
                    <label for="payment_method" class="block font-medium text-sm text-gray-700 dark:text-gray-200">
                        💳 Metode Pembayaran
                    </label>
                    <select name="payment_method"
                            class="mt-1 w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                        <option value="Transfer">🏦 Transfer Bank (BRI - 324801005214504 a.n Dina Pratiwi)</option>
                        <option value="QRIS">📱 QRIS</option>
                    </select>
                </div>

                {{-- Tombol --}}
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-semibold transition transform hover:scale-105">
                    💰 Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
