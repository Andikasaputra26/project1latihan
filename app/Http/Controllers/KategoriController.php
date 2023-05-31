<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduct;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = KategoriProduct::get();
        return view('kategori.index', ['kategori' => $kategori]);
    }

    public function tambah()
    {
        return view('kategori.form');
    }

    public function simpan(Request $request)
    {
        KategoriProduct::create(['name_category' => $request->name_category]);
        return redirect()->route('kategori');
    }

    public function edit($id, Request $request)
    {
        $kategori = KategoriProduct::find($id)->first();
        return view('kategori.form', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        KategoriProduct::find($id)->update(['name_category' => $request->name_category]);
        return redirect()->route('kategori');
    }

    public function hapus($id)
    {
        KategoriProduct::find($id)->delete();
        return redirect()->route('kategori');
    }
}
