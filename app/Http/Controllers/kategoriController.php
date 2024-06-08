<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index()
    {
        $kategoris = kategori::latest()->paginate(5);
        return view('frontend.kategori', ['kategoris' => $kategoris]);
    }
}
