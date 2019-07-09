<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $fillable = array('nama', 'nama_eskul', 'kelas', 'umur', 'sekolah');
    public $timestamps = true;
}
