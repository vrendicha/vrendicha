<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">List Kategori</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto">
            <ul class="bg-white shadow rounded p-4 space-y-2">
                @forelse ($categories as $category)
                    <li class="border-b pb-2">{{ $category->name }}</li>
                @empty
                    <li class="text-gray-500">Belum ada kategori</li>
                @endforelse
            </ul>
        </div>
    </div>
</x-app-layout>