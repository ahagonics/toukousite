<?php

namespace App\Models\Models;

use App\Models\Mangas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function mangas(){
        /* teams テーブルに設定した coach_id で関連付けする
         * $this->hasOne(<連携先クラス名>::class)
         */
        return $this->hasMany(Mangas::class);
    }



}
