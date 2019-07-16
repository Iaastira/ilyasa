<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = true;
    protected $fillable = ['nama_barang', 'nomor_barang', 'supplier', 'stok_barang'];
}
