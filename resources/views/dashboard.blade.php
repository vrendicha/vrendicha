<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-10 bg-gradient-to-r from-indigo-500 to-blue-500 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($latestProducts as $product)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden dark:bg-gray-800">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-contain bg-white">

                        <div class="p-4 text-white">
                            <h3 class="text-lg font-semibold text-gray-200">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-300">{{ $product->description }}</p>
                            <p class="text-sm mt-1">Stok: {{ $product->stock }}</p>
                            <p class="text-xl font-bold text-purple-400">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

                            <div class="flex justify-between items-center mt-4">
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Tambah</button>
                                </form>
                               <a href="{{ route('checkout.buyNow.confirm', $product->id) }}"
                                 class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm text-center">
                                    Beli
                                </a>
                                {{-- Tombol Chat --}}
                                <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20tertarik%20dengan%20{{ urlencode($product->name) }}" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">Chat</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
