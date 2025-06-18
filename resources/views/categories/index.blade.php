<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori Produk') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Tombol Tambah Kategori -->
            <div class="mb-4">
                <a href="{{ route('categories.create') }}" 
                   class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    + Tambah Kategori
                </a>
            </div>

            <!-- Tabel Kategori -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Kategori</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah Produk</th>
                                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="px-4 py-2">{{ $category->id }}</td>
                                    <td class="px-4 py-2">{{ $category->name }}</td>
                                    <td class="px-4 py-2">{{ $category->products_count }}</td>
                                    <td class="px-4 py-2 space-x-2">
                                        <a href="{{ route('categories.edit', $category->id) }}" 
                                           class="text-yellow-500 hover:underline">Edit</a>

                                        <form action="{{ route('categories.destroy', $category->id) }}" 
                                              method="POST" class="inline-block"
                                              onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($categories->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">
                                        Belum ada kategori.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
