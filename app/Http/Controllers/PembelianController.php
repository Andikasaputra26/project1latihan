<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\KategoriProduct;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = KategoriProduct::all();
        return view('pembelian.index', compact('product', 'kategori'));
    }
}
