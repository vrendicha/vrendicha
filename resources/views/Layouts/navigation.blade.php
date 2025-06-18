<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600">
                    Dina Parfum
                </a>

                <!-- Menu Links -->
                <a href="{{ route('categories.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                    List Kategori
                </a>
                <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                    List Produk
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-gray-700">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Login</a>
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
