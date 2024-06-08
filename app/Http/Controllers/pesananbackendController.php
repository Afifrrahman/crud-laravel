<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananbackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanans=Pesanan::latest()->paginate(10);
        return view('backend.pesanans.index',['pesanans'=>$pesanans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pesanans.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
                'nama_pelanggan' => 'required',
                'nama_produk' => 'required',
                'harga' => 'required',
                'merek' => 'required',
                'total' => 'required',
                'tgl_pesanan' => 'required',
                'alamat' => 'required'
        ]);
        
        pesanan::create($validatedData);
        return redirect('pesanan-backend')->with('pesan','Data berhasil disimpan');
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
        return view('backend.pesanans.edit', [
            'pesanans' => pesanan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama_pelanggan' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'total' => 'required',
            'tgl_pesanan' => 'required',
            'alamat' => 'required'
        ]);
    
        pesanan::where('id',$id)->update($validatedData);
        return redirect('pesanan-backend')->with('pesan','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pesanan::destroy($id);
        return redirect('/pesanan-backend')->with('pesan','Data berhasil di hapus');
    }
}
