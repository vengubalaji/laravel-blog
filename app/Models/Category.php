<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Category has many post
    public function post(){
        return $this->hasMany('App\Models\Post','post_id','category_id');
    }
}
