<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = [
        'namabarang',
        'hargabarang',
        'stok',
        'deskripsi'
    ];
}
