<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan</title>
</head>
<body>
    <h1>Daftar Pesanan</h1>
    <ul>
        @foreach ($orders as $order)
            <li>
                {{ $order->customer_name }} - Rp{{ number_format($order->total_price, 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>
