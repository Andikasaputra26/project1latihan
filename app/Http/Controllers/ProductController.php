<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\KategoriProduct;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('pos.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduct::get();
        return view('pos.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
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

        return redirect()->route('pos.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $kategori = KategoriProduct::get();
        return view('pos.edit', ['pos' => $product, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        return redirect()->route('pos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('pos.index');
    }
}
