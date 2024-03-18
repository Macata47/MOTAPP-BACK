<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //Relacion muchos a muchos inversa polimorfica
    public function eventos(){
    return  $this->morphedByMany('App\Models\Evento', 'taggable');
    }

    public function videos(){
        return  $this->morphedByMany('App\Models\Video', 'taggable');
        }

}


