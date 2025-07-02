<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Invoice #{{ $order->id }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Rincian Pesanan</h3>

        <p><strong>Tanggal:</strong> {{ $order->created_at->format('d M Y') }}</p>
        <p><strong>Metode Pembayaran:</strong> {{ ucfirst($order->payment_method) }}</p>

        <table class="w-full mt-4 text-sm">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-2">Produk</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-right">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    <tr class="border-b">
                        <td class="py-2">{{ $item->product->name }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-right">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p class="text-right font-bold mt-4">Total: Rp{{ number_format($order->total, 0, ',', '.') }}</p>
    </div>
</x-app-layout>
