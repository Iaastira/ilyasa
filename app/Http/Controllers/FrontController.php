<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at','asc');
        
        return view('front.index', compact('artikel'));
    }
}
