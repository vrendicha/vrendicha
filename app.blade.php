<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'E-Commerce') }}</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        header, footer { background: #f4f4f4; padding: 1rem; text-align: center; }
        nav a { margin: 0 1rem; text-decoration: none; color: #333; }
        .container { padding: 1rem; }
    </style>
</head>
<body>
    <header>
        @include('components.navbar')
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
