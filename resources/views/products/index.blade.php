<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($products as $product)
                            <div class="bg-gray-100 border rounded-lg shadow p-4">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded mb-2">
                                @endif
                                <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $product->description }}</p>
                                <p class="mt-1"><strong>Stok:</strong> {{ $product->stock }}</p>
                                <p class="mt-1"><strong>Kategori:</strong> {{ $product->category->name }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- PAGINATION -->
                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
