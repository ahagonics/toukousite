<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;

class MangasRankingController extends Controller
{
    public function index(Request $request){
        $mangasrank=Mangas::orderBy('review','desc')->select('name','review')->get();

        return view('Toukousite.mangaranking', compact('mangasrank'));
    }
}
