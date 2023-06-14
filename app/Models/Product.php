<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['img', 'name_product', 'description', 'stock', 'price', 'id_kategori'];
    protected $appends = ['img_url'];

    public function kategori()
    {
        return $this->belongsTo(KategoriProduct::class, 'id_kategori');
    }

    protected function imgUrl(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attr) => asset('dist/assets/media/product/' . $attr['img']),
        );
    }
}
