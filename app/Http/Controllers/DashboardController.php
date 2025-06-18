namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalViews = Product::sum('views'); // pastikan kolom views ada

        return view('dashboard', compact('totalProducts', 'totalCategories', 'totalViews'));
    }
}
