<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;

class MangaController extends Controller
{
    public function index(Request $request){
        $mangas=Mangas::orderBy('created_at','desc')->select('created_at','name')->get();

        return view('Toukousite.manga', compact('mangas'));
    }
}
