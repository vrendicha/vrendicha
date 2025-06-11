<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
