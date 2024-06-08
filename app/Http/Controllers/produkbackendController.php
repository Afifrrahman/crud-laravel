<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::latest()->paginate(8);
        return view('backend.produks.index', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.produks.create',['kategoris'=>Kategori::all()]);
        // return view('backend.produks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|min:3',
            'merek' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'total' => 'required'
        ]);

        Produk::create($validatedData);
        return redirect('produk-backend')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.produks.edit', [
            'produks' => Produk::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'merek' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'total' => 'required'
        ]);

        Produk::where('id', $id)->update($validatedData);
        return redirect('/produk-backend')->with('pesan', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::destroy($id);
        return redirect('/produk-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
