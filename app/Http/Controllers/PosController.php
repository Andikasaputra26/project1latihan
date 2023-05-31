<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriProduct;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PosController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('pos.index', ['pos' => $product]);
    }

    public function tambah()
    {
        $kategori = KategoriProduct::get();
        return view('pos.form', ['kategori' => $kategori]);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'id_kategori' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // maksimal 2MB
        ]);

        // Simpan Gambar Jika Ada
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $nama_gambar = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('dist/assets/media/product'), $nama_gambar);
        } else {
            $nama_gambar = null;
        }

        // Simpan Data
        $product = new Product;
        $product->name_product = $request->name_product;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->id_kategori = $request->id_kategori;
        $product->img = $nama_gambar;
        $product->save();

        return redirect()->route('pos');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $kategori = KategoriProduct::get();
        return view('pos.form', ['pos' => $product, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        // $product = Product::find($id);
        // $product->name_product = $request->name_product;
        // $product->description = $request->description;
        // $product->stock = $request->stock;
        // $product->price = $request->price;
        // $product->id_kategori = $request->id_kategori;

        // if ($request->hasFile('img')) {
        //     $destination = 'dist/assets/media/product' . $product->img;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }

        //     $file = $request->file('img');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;
        //     $file->move('dist/assets/media/product', $filename);
        //     $product->img = $filename;
        // }

        // $product->update();
        // return redirect()->route('pos');

        $product = Product::find($id);
        $product->name_product = $request->input('name_product');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
        $product->id_kategori = $request->input('id_kategori');

        if ($request->hasFile('img')) {
            $destination = 'dist/assets/media/product' . $product->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('dist/assets/media/product', $filename);
            $product->img = $filename;
        }
        $product->update();
        return redirect()->route('pos');
    }

    public function hapus($id)
    {
        Product::find($id)->delete();
        return redirect()->route('pos');
    }
}
