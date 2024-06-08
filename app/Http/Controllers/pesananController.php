<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;


class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::latest()->paginate(5);
        return view('frontend.pesanan', ['pesanans' => $pesanans]);
        
    }
}
