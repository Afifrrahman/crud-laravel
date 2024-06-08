<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pelanggan', 'nama_produk', 'harga','merek', 'total', 'tgl_pesanan', 'alamat'];

}
