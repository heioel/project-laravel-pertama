<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function buy($nama_produk)
    {
        $produk = Produk::where('nama_produk', '=', $nama_produk)->get();
        return view('produk.buypage', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $pathFile = $request->file('gambar')->storeAs('produk', rand(0, 10000) . $request->file('gambar')->getClientOriginalName());
        }
        $produk = Produk::insert([
            'nama_produk' => $request->nama_produk,
            'gambar' => $pathFile,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::where('id', '=', $id)->get();
        return view('produk.edit', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::where('id', '=', $id)->get();
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $findFile = Produk::all()->find($request->id);
        if ($findFile->gambar != null || $findFile->gambar = '') {
            Storage::delete($findFile->gambar);
        }
        if ($request->hasFile('gambar')) {
            $pathFile = $request->file('gambar')->storeAs('produk', rand(0, 10000) . $request->file('gambar')->getClientOriginalName());
        }
        $editProduk = Produk::where('id', '=', $request->id)->first();
        $editProduk->nama_produk = $request->nama_produk;
        $editProduk->gambar = $pathFile;
        $editProduk->harga = $request->harga;
        $editProduk->stock = $request->stock;
        $editProduk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::all()->find($id);
        if ($produk->gambar != null || $produk->gambar = '') {
            Storage::delete($produk->gambar);
        }
        $produkId = Produk::where('id', '=', $id)->delete($id);
        return redirect()->route('produk.index');
    }
}
