<!-- resources/views/admin/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Selamat datang, Admin!
                    <div class="mt-6">
                        <a href="{{ route('admin.products') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kelola Produk</a>
                        <a href="{{ route('admin.products.create') }}" class="ml-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Tambah Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
