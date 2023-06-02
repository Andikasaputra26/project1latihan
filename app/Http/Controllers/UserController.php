<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = KategoriProduct::all();
        // return view('user.index', ['user' => $product]);
        return view('user.index', compact('product', 'kategori'));
    }
}
