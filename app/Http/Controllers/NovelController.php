<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novels;

class NovelController extends Controller
{
    public function index(Request $request){
        $novels=Novels::orderBy('created_at','desc')->select('id','name','genre_id','toukou_user_id','content','created_at')->get();

        return view('Toukousite.novel', compact('novels'));
    }
}
