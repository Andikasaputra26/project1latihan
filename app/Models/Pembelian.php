<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = ['total_harga', 'metode_bayar'];

    public function PembelianItem(): HasMany
    {
        return $this->hasMany(PembelianItem::class, 'id', 'id_pembelian');
    }
}
