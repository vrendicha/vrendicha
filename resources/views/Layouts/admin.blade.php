<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Dina Parfum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
    <nav class="bg-indigo-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <h1 class="font-bold">Dina Parfum Admin</h1>
            <a href="{{ route('logout') }}" class="underline text-sm">Logout</a>
        </div>
    </nav>

    <main class="container mx-auto mt-6">
        @yield('content')
    </main>
</body>
</html>
