<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novels;


class NovelsRankingController extends Controller
{
    public function index(Request $request){
        $novelsrank=Novels::orderBy('review','desc')->select('id','name','genre_id','toukou_user_id','content','review')->get();
        // dd($novelsrank);
        //小説ランキング
        // $novels_ranking = app()->make(NovelsRank::class)->NovelsRanking();

        // $novels_rankdata = [
        //     'novels_ranking' => $novels_ranking,
        // ];

        return view('Toukousite.novelranking', compact('novelsrank'));
    }
}
