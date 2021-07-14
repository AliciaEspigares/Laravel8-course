<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function post(){
        return $this->hasOne(Post::class); //Default
        //return $this->hasOne('App\Models\Post');  //Another way to do it
        //return $this->hasOne(Post::class, 'the_user_id', 'post_id'); //if our ids are not by default
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps(); //Con nombres predeterminados

        // return $this->belongsToMany(Role::class, 'name_pivot_table', 'user_id','role_id'); //Si algún nombre no es el estandar.
    }


    public function photos(){
        return $this->morphMany(Photo::class,'photoable');

    }


}
