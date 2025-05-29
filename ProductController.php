<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 10000],
            ['id' => 2, 'name' => 'Produk B', 'price' => 15000],
            ['id' => 3, 'name' => 'Produk C', 'price' => 20000],
        ];

        return view('products.index', compact('products'));
    }
}
