<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoribackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris=kategori::latest()->paginate(10);
        return view('backend.kategori.index',['kategoris'=>$kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pegawais.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
                'nama' => 'required',
                'jabatan' => 'required',
                'tanggal_masuk' => 'required',
                'keahlian' => 'required'
        ]);
        
        // if ($request->hasFile('file_upload')) {
        //     $namaFile='img_'.time().'_'.$request->file_upload->getClientOriginalName();
        //     $request->file_upload->move('images',$namaFile);
        // }
        // else {
        //     $namaFile='img_default.png';
        // }
        
        // $validatedData['file_upload']=$namaFile;
      
        // $validatedData['user_id']=auth()->user()->id;
        // $validatedData['excerpt']=Str::limit(strip_tags($request->body),50);
        
        pegawai::create($validatedData);
        return redirect('pegawai-backend')->with('pesan','Data berhasil disimpan');
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
        return view('backend.pegawais.edit', [
            'pegawais' => pegawai::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tanggal_masuk' => 'required',
            'keahlian' => 'required'
        ]);
    
        pegawai::where('id',$id)->update($validatedData);
        return redirect('pegawai-backend')->with('pesan','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::destroy($id);
        return redirect('/pegawai-backend')->with('pesan','Data berhasil di hapus');
    }
}
