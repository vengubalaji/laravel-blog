<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Post & Tag have many to many relationship
    public function post(){
        return $this->belongsToMany('App\Models\Post');
    }
}
