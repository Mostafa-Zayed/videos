<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['user_id','video_id','comment'];

    public function video(){

        return $this->belongsTo(Video::class,'video_id');
    }
    public function user(){
        
        return $this->belongsTo(User::class,'user_id');
    }
}
