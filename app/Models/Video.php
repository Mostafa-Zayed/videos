<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'name',
        'image',
        'describe',
        'meta_keywords',
        'meta_describe',
        'youtube_link',
        'published',

    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }


    public function skills(){
        return $this->belongsToMany(Skill::class,'skills_videos');
    }

    public function tages(){
        return $this->belongsToMany(Tage::class,'tages_videos');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getPublished(){
        return $this->published == 1 ? 'Pudblished' : 'Not Published' ;
    }
}
