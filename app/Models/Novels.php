<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genre;

class Novels extends Model
{
    use HasFactory;
    protected $table ='novels';

    public function user(){

        return $this->belongsTo(User::class, 'toukou_user_id');
    }

    public function genre(){

        return $this->belongsTo(Genre::class, 'genre_id');
    }

}
