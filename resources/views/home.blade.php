@extends('layouts.app')

@section('content')
    <h1>Selamat datang di E-Commerce kami!</h1>
    <p>Temukan produk terbaik kami!</p>
    <a href="{{ route('products.index') }}">Lihat Produk</a>
@endsection
