<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novels;
use Carbon\Carbon;


class TodayNovelController extends Controller
{
    public function index(Request $request){
        $today=Carbon::today();
        $todaynovel=Novels::whereDate('created_at', $today)->select('id','name','genre_id','toukou_user_id','content','review','created_at')->get();

        return view('Toukousite.todaynovel', compact('todaynovel'));
    }
}
