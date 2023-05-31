<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;

class MangasRankingController extends Controller
{
    public function index(Request $request){

        $mangasrank=Mangas::orderBy('review','desc')->select('id','name','genre_id','toukou_user_id','content','review','created_at')->get();

        return view('Toukousite.mangaranking', compact('mangasrank'));
    }
}
