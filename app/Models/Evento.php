<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion uno  a muchos polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable');
    }

    //relacion muchos a muchos polimorfica
    public function eventos(){
        return $this->morphToMany('App\Models\Tag','taggable');
    }
}

