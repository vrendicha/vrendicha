<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // 🧾 Halaman checkout dari keranjang
    public function checkout()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        return view('checkout.index', compact('cartItems', 'total'));
    }

    // ✅ Konfirmasi pembayaran dari keranjang
    public function confirm()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', Auth::id())
            ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang kosong.');
        }

        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        return view('checkout.confirm', compact('cartItems', 'total'));
    }

    // 💳 Proses checkout dari keranjang
    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string|max:100',
        ]);

        $user = Auth::user();
        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang kosong.');
        }

        $order = Order::create([
            'user_id'        => $user->id,
            'total'          => $cartItems->sum(fn($item) => $item->product->price * $item->quantity),
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $item->product_id,
                'quantity'   => $item->quantity,
                'price'      => $item->product->price,
            ]);

            $item->product->decrement('stock', $item->quantity);
        }

        CartItem::where('user_id', $user->id)->delete();

        return redirect()->route('orders.thankyou')->with('success', 'Pesanan berhasil diproses.');
    }

    // 📦 Daftar pesanan pengguna
    public function index()
    {
        $orders = Order::with(['items.product'])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('order.index', compact('orders'));
    }

    // ⚡ Fungsi beli langsung satu produk (tampilkan konfirmasi dulu)
    public function confirmBuyNow(Product $product)
    {
        if ($product->stock < 1) {
            return redirect()->route('products.index')->with('error', 'Stok habis');
        }

        return view('checkout.confirm_buy_now', compact('product'));
    }

    // 💸 Proses beli langsung
    public function buyNow($productId, Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string|max:100',
        ]);

        $user = Auth::user();
        $product = Product::findOrFail($productId);
        $quantity = $request->input('quantity');
        $payment = $request->input('payment_method');

        if ($product->stock < $quantity) {
            return back()->with('error', 'Stok produk tidak mencukupi.');
        }

        $order = Order::create([
            'user_id'        => $user->id,
            'total'          => $product->price * $quantity,
            'payment_method' => $payment,
        ]);

        OrderItem::create([
            'order_id'   => $order->id,
            'product_id' => $product->id,
            'quantity'   => $quantity,
            'price'      => $product->price,
        ]);

        $product->decrement('stock', $quantity);

        return redirect()->route('orders.thankyou')->with('success', 'Pembelian berhasil!');
    }
}
