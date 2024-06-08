<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pelanggan', 'nama_produk', 'jenis', 'merek', 'tanggal', 'ulasan'];
    

}
