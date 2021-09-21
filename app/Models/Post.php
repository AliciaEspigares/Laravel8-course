<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $imagesDirectory = "/images/";

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','user_id', 'id','path'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function photos(){
        return $this->morphMany(Photo::class,'photoable');

    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public static function scopeLatest2Post($query){
        return $query->where('is_admin',0)->orderBy('id', 'desc')->take(2)->get();
    }

    public function getPathAttribute($value){
        return $this->imagesDirectory . $value;
    }

}
