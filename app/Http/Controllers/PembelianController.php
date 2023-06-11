<?php

namespace App\Http\Controllers;

use App\Facades\Cart;
use App\Models\Pembelian;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\KategoriProduct;
use App\Facades\Cart as FacadesCart;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = KategoriProduct::all();
        return view('pembelian.index', compact('product', 'kategori'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        Cart::add($product);
        $this->emit('addToCart');

        // dd($cart['product']);
        // dd(Cart::get()['product']);
    }

    public $cart;
    public function mount()
    {
        $this->cart = FacadesCart::get();
    }

    // public $cartTotal = 0;

    // public function mount()
    // {
    //     $this->updateCartTotal();
    // }

    // public function updateCartTotal()
    // {
    //     $this->cartTotal = count(Cart::get()['product']);
    // }
}
