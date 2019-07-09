<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = array ('nama_tag', 'slug');
    public $timestamps = true;
    public function artikel(){
        return $this->belongsToMany('App\Artikel');
    }
}
