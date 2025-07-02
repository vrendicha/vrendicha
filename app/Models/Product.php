<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'image',
        'category_id', // pastikan ini adalah foreign key yang benar di tabel products
    ];

    /**
     * Relasi ke kategori produk (satu produk milik satu kategori)
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
