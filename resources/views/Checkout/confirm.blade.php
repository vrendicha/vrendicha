<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Konfirmasi Pesanan</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-bold mb-4">Ringkasan Pesanan</h3>

            {{-- Daftar produk dalam keranjang --}}
            <ul class="mb-4 text-sm text-gray-700">
                @foreach ($cartItems as $item)
                    <li class="mb-1">
                        {{ $item->product->name }} x{{ $item->quantity }} —
                        Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                    </li>
                @endforeach
            </ul>

            {{-- Total --}}
            <p class="text-xl font-bold text-purple-600 mb-6">
                Total: Rp{{ number_format($total, 0, ',', '.') }}
            </p>

            {{-- 🔐 Info Rekening --}}
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4 mb-6">
                <h4 class="text-md font-semibold text-blue-800 mb-2">💳 Pembayaran via Transfer Bank</h4>
                <p class="text-sm text-gray-700">
                    Bank: <strong>BRI</strong><br>
                    No Rek: <strong>3248 0100 5214 504</strong><br>
                    Atas Nama: <strong>Dina Pratiwi</strong>
                </p>
                <p class="mt-2 text-sm text-gray-500">
                    Setelah transfer, kirimkan bukti pembayaran ke WhatsApp admin.
                </p>
            </div>

            {{-- Form Submit --}}
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf

                <label for="payment_method" class="block mb-2 font-semibold text-gray-700">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" class="w-full border-gray-300 rounded mb-6">
                    <option value="Transfer">Transfer Bank (BRI)</option>
                    <option value="QRIS">QRIS</option>
                </select>

                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
