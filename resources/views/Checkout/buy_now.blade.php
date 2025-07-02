<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">Checkout Sekarang</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
            <h3 class="text-lg font-semibold mb-4">Konfirmasi Pembelian</h3>

            <div class="flex gap-4 items-center">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover rounded">
                <div>
                    <h4 class="text-lg font-bold">{{ $product->name }}</h4>
                    <p class="text-gray-600 mb-2">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    <form method="POST" action="{{ route('checkout.process') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded">Bayar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>