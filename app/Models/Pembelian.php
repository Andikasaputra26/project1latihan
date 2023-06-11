<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = ['product_id', 'total_item', 'total_harga', 'bayar'];

    public function Produk()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
