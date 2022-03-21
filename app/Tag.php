<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){                    //nome funzione plurale (many to many)
        return $this->belongsToMany('App\Post');
    }
}
