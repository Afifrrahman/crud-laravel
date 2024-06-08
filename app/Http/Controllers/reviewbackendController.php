<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('backend.reviews.index', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_produk' => 'required',
            'jenis' => 'required',
            'merek' => 'required',
            'tanggal' => 'required',
            'ulasan' => 'required'
        ]);

        Review::create($validatedData);
        return redirect('review-backend')->with('pesan', 'Data berhasil disimpan');
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
        return view('backend.reviews.edit', [
            'reviews' => review::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_produk' => 'required',
            'jenis' => 'required',
            'merek' => 'required',
            'tanggal' => 'required',
            'ulasan' => 'required'
        ]);

        Review::where('id', $id)->update($validatedData);
        return redirect('review-backend')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Review::destroy($id);
        return redirect('/review-backend')->with('pesan', 'Data berhasil dihapus');
    }
}
