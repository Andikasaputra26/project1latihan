<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $account = User::all();
        return view('user.index', compact('account'));
    }

    public function tambah()
    {
        return view('user.create');
    }

    public function simpan(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required|confirmed'
        ])->validate();

        User::crete([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'admin', 'kasir'
        ]);

        return redirect()->route('user');
    }
}
