<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

//     //relación uno a uno
//     public function profile(){
//         return $this->hasOne('App\Models\Profile');
//     }

//     //relacion uno a muchos
//     public function eventos(){
//         return  $this->hasMany('App\Models\Evento');
//     }

//     public function videos(){
//         return  $this->hasMany('App\Models\Video');
//     }

//     public function comments(){
//         return $this->hasMany('App\Models\Comment');
        
//     }

//     //relacion muchos a muchos
//     public  function roles(){
//         return $this->belongsToMany('App\Models\Role');
//     }

//      //relacion uno a uno polimorfica
//      public function image(){
//         return $this->morphOne('App\Models\Image', 'imageable');
//     }

// 
}