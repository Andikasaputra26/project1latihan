<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['kode_product', 'img', 'name_product', 'description', 'stock', 'price', 'id_kategori'];
    protected $appends = ['img_url'];

    public function getPriceAttribute($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->kode_product = static::getNextNomorUrut();
        });
    }

    public static function getNextNomorUrut()
    {
        $lastNomorUrut = static::max('kode_product');
        $nextNomorUrut = $lastNomorUrut ? $lastNomorUrut + 1 : 1;
        $formattedNomorUrut = sprintf('%06d', $nextNomorUrut);

        return $formattedNomorUrut;
    }

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
