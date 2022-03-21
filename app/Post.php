<?php

namespace App;
use App\Category;
use App\Tag;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','ingredients','img','price','content','time_cooking','slug','category_id'];
    
    public function category(){                //nome funzione singolare (one to one)
        return $this->belongsTo('App\Category');
    }
    public function tags(){                    //nome funzione plurale (many to many)
        return $this->belongsToMany('App\Tag');
    }
}
