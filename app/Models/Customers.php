<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name_customers', 'email', 'telephone', 'address'];

    // public function PembelianItem(): HasMany
    // {
    //     return $this->hasMany(PembelianItem::class, 'id_pembelian_item');
    // }
}
