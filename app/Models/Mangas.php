<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mangas extends Model
{
    use HasFactory;
    protected $table ='mangas';

    public function user(){

        return $this->belongsTo(User::class, 'toukou_user_id');
    }


    public function genre(){

        return $this->belongsTo(Genre::class, 'genre_id');
    }

}


