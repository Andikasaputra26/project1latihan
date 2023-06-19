<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customers::all();
        return view('customer.index', compact('customer'));
    }

    public function tambah()
    {
        return view('customer.create');
    }

    public function simpan(Request $request)
    {
        Customers::create([
            'name_customers' => $request->name_customers,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);
        return redirect()->route('customer');
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $id, $request)
    {
        Customers::find($id)->update([
            'name_customers' => $request->name_customers,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);
        return redirect()->route('customer');
    }

    public function hapus($id)
    {
        Customers::find($id)->delete();
        return redirect()->route('customer');
    }
}
