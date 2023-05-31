<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['img', 'name_product', 'description', 'stock', 'price', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(KategoriProduct::class, 'id_kategori');
    }
}
