<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-lg font-bold text-indigo-600">
                        Ecommerce
                    </a>
                </div>

                <!-- Menu Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('categories.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                        List Kategori
                    </a>
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">
                        List Produk
                    </a>
                </div>
            </div>

            <!-- Right side (optional: user menu, login/logout) -->
            <div class="hidden sm:flex sm:items-center">
                @auth
                    <span class="text-gray-700 mr-4">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium mr-4">Login</a>
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
