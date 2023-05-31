<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mangas;
use Carbon\Carbon;

class TodayMangaController extends Controller
{
    public function index(Request $request){
        $today=Carbon::today();
        $todaymanga=Mangas::whereDate('created_at', $today)->select('id','name','genre_id','toukou_user_id','content','review','created_at')->get();

        return view('Toukousite.todaymanga', compact('todaymanga'));
    }
}
