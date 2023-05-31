<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;

class MangaController extends Controller
{
    public function index(Request $request){
        $mangas=Mangas::orderBy('created_at','desc')->select('id','name','genre_id','toukou_user_id','content','created_at')->get();

        return view('Toukousite.manga', compact('mangas'));
    }
}
