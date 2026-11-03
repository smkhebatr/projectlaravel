<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class itemController extends Controller
{
    //
    public function index ()
{
    //
}

public function create ()
{
    // berfungsi untuk menampilkan halaman formulir
    return view('items.create');  // memanggil file create
                                  // di folder view items

}
public function store(Request $request)
{
// menyimpan data ke tabel database
item::create([
    'code'=>$request->code,
    'item_name'=>$request->item_name,
    'category'=>$request->category,
    'stok'=>$request->stok,
    'condition'=>$request->condition,
    'room_location'=>$request->room_location,
]);
// arahkan ke halaman form kembali setelah berhasil
return redirect()->back()->with('succes','Barang berhasil ditambahkan');
}
}