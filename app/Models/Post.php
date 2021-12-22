<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Post have single user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Post have single category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    //Post have multiple tag
    public function tag(){
        return $this->belongsToMany('App\Models\Tag');
    }

    //Post have multiple comments
    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }
}
