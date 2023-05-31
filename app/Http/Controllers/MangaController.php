<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;

class MangaController extends Controller
{
    public function index(Request $request){
        $mangas=Mangas::orderBy('created_at','desc')->select('id','name','genre_id','content','review')->get();

        return view('Toukousite.manga', compact('mangas'));
    }
}
