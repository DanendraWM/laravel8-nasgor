<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu = new menu;
    }
    public function admin()
    {
        return view('admin');
    }
    public function insert(request $request)
    {
        $file = $request->foto;
        $filename = request()->nama . '.' . $file->extension();
        $file->move(public_path('img'), $filename);

        $data = [
            'nama' => request()->nama,
            'jenis' => request()->jenis,
            'harga' => request()->harga,
            'foto' => $filename,
            'deskripsi' => request()->deskripsi,
        ];
        $this->menu->InsertData($data);
        return redirect()->route('admin')->with('pesan', 'menu berhasil di tambahkan');
    }
}
