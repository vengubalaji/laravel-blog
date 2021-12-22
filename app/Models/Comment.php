<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Post have multiple comments
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
