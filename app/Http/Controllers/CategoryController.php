<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get(); // menghitung jumlah produk per kategori
        return view('categories.index', compact('categories'));
    }
}

