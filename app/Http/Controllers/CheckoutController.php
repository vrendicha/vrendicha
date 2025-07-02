<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CheckoutController extends Controller
{
    public function buyNow(Product $product)
    {
        // Simulasi proses pembelian langsung
        return redirect()->back()->with('success', "Pembelian produk {$product->name} berhasil (simulasi).");
    }
}


class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('checkout.index', compact('cart'));
    }

    public function process(Request $request)
    {
        // Di sini kamu bisa proses pembayaran atau simpan ke database
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Checkout berhasil!');
    }
}
