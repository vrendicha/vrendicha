<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Gambar Produk Hilang</title>
</head>
<body style="font-family:sans-serif;">
    <h2 style="color:red;">🚫 Gambar Produk Hilang:</h2>
    <ul>
        @foreach ($missingImages as $missing)
            <li>{{ $missing }}</li>
        @endforeach
    </ul>
</body>
</html>
