<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $dates = ['deleted_at']; 
    protected $fillable = ['title','content','user_id', 'id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function photos(){
        return $this->morphMany(Photo::class,'photoable');

    }

}
