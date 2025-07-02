<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama.
     */
    public function index()
    {
        $totalProducts   = Product::count();
        $totalCategories = Category::count();
        $totalViews      = Product::sum('views');
        $latestProducts  = Product::latest()->take(8)->get();

        return view('dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalViews',
            'latestProducts'
        ));
    }
}
