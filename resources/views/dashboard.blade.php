@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Dashboard</h1>

    <div class="row">
        <!-- Kategori -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Kategori</h5>
                    <p class="card-text fs-3">{{ $totalCategories }}</p>
                </div>
            </div>
        </div>

        <!-- Produk -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text fs-3">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>

        <!-- Klik Produk -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Klik Produk</h5>
                    <p class="card-text fs-3">{{ $totalViews }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
