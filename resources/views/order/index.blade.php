<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white leading-tight">
            Daftar Pesanan
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md overflow-hidden">
                @if ($orders->isEmpty())
                    <p class="text-center text-gray-600 dark:text-gray-300 py-6">
                        Belum ada pesanan.
                    </p>
                @else
                    <table class="w-full table-auto text-sm text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-white uppercase text-xs">
                                <th class="px-4 py-2 border-b">#</th>
                                <th class="px-4 py-2 border-b">Tanggal</th>
                                <th class="px-4 py-2 border-b">Produk</th>
                                <th class="px-4 py-2 border-b text-center">Jumlah</th>
                                <th class="px-4 py-2 border-b text-center">Metode</th>
                                <th class="px-4 py-2 border-b text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 dark:text-gray-200">
                            @foreach ($orders as $order)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                    <td class="px-4 py-2 border-b">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 border-b">{{ $order->created_at->format('d M Y') }}</td>
                                    <td class="px-4 py-2 border-b">
                                        <ul class="list-disc ml-4 space-y-1">
                                            @foreach ($order->items as $item)
                                                <li>{{ $item->product->name }} (x{{ $item->quantity }})</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="px-4 py-2 border-b text-center">
                                        {{ $order->items->sum('quantity') }}
                                    </td>
                                    <td class="px-4 py-2 border-b text-center">
                                        {{ $order->payment_method ?? '-' }}
                                    </td>
                                    <td class="px-4 py-2 border-b text-right text-purple-600 font-semibold">
                                        Rp{{ number_format($order->total_price ?? $order->total, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
