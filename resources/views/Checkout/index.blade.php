<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">Checkout</h2>
    </x-slot>

    <div class="py-8 bg-gray-100">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-xl shadow-md space-y-6">

                {{-- Alert jika ada error --}}
                @if(session('error'))
                    <div class="mb-4 text-red-600 font-semibold">{{ session('error') }}</div>
                @endif

                {{-- Form checkout --}}
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf

                    {{-- Informasi Pengiriman --}}
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Informasi Pengiriman</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm text-gray-700">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ auth()->user()->name ?? '' }}" required
                                   class="w-full border-gray-300 rounded mt-1 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-700">Email</label>
                            <input type="email" name="email" value="{{ auth()->user()->email ?? '' }}" required
                                   class="w-full border-gray-300 rounded mt-1 shadow-sm">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-sm text-gray-700">Alamat</label>
                        <textarea name="address" rows="3" required
                                  class="w-full border-gray-300 rounded mt-1 shadow-sm"></textarea>
                    </div>

                    {{-- Metode Pembayaran --}}
                    <div class="mt-4">
                        <label class="block text-sm text-gray-700">Metode Pembayaran</label>
                        <select name="payment_method" required class="w-full mt-1 rounded border-gray-300 shadow-sm">
                            <option value="">-- Pilih Metode --</option>
                            <option value="COD">COD</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="E-Wallet">E-Wallet</option>
                        </select>
                    </div>

                    {{-- Ringkasan Pesanan --}}
                    <h3 class="text-lg font-semibold text-gray-700 mt-8 mb-2">Ringkasan Pesanan</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto text-left border">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">Produk</th>
                                    <th class="px-4 py-2 text-center">Qty</th>
                                    <th class="px-4 py-2 text-center">Harga</th>
                                    <th class="px-4 py-2 text-center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach($cart as $item)
                                    @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                                    <tr>
                                        <td class="border-t px-4 py-2">{{ $item['name'] }}</td>
                                        <td class="border-t px-4 py-2 text-center">{{ $item['quantity'] }}</td>
                                        <td class="border-t px-4 py-2 text-center">Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                                        <td class="border-t px-4 py-2 text-center">Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-100 font-semibold">
                                    <td colspan="3" class="px-4 py-2 text-right">Total:</td>
                                    <td class="px-4 py-2 text-center text-purple-600">Rp{{ number_format($total, 0, ',', '.') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit"
                                class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-2 rounded shadow">
                            Proses Pesanan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
