<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novels;

class NovelController extends Controller
{
    public function index(Request $request){
        $novels=Novels::orderBy('created_at','desc')->select('created_at','name')->get();

        return view('Toukousite.novel', compact('novels'));
    }
}
