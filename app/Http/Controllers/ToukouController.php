<?php

namespace App\Http\Controllers;

use App\Models\Toukou;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\ToukouUser;
use App\Models\Novels;
use App\Models\Mangas;
use App\Models\User;

class ToukouController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $Toukous = Toukou::all();
        // dd($contacts);compact('Toukous')

        return view('Toukousite.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $Genres = Genre::all();
        $Toukouusers = ToukouUser::all();
        $Users = User::all();

        //  dd($Genres,$Users);
        return view('Toukousite.form',compact('Genres','Toukouusers','Users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            /* name 欄を 必須項目、2文字以上、100文字以内で形式判定する */
            'name' => ['required', 'min:2', 'max:20'],
            'genre' => ['required'],
            'story' => ['required','min:10','max:50'],
                // 'is_visible' => ['required']
        ]);

        $Genres = new Genre;
        $Toukouusers = new ToukouUser;
        $Novels = new Novels;
        $Mangas = new Mangas;

        if($request->t_genre == 0){
            $Novels->name = $request->name;
            $Novels->genre_id = $request->genre;
            $Novels->toukou_user_id = $request->s_users;
            $Novels->content = $request->story;
            $Novels->review = 1;

            $Novels->save(); //保存の後はリダイレクト

            return redirect(route('Toukousite.index'));
        }else{
            $Mangas->name = $request->name;
            $Mangas->genre_id = $request->genre;
            $Mangas->toukou_user_id = $request->s_user;
            $Mangas->content = $request->story;
            $Mangas->review = 1;

            $Novels->save(); //保存の後はリダイレクト

            return redirect(route('Toukousite.index'));
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
