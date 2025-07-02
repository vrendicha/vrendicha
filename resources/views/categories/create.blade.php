<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Kategori
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold">Nama Kategori</label>
                        <input type="text" name="name" class="w-full border border-gray-300 rounded px-3 py-2 mt-1" required>
                    </div>

                    {{-- Tombol Simpan --}}
                    <div class="mt-4">
                       <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-bleck px-4 py-2 rounded border border-black">
                        Simpan
                        </button>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
