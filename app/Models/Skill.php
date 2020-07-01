<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable =['name','status'];

    public function videos(){
        return $this->belongsToMany(Video::class,'skills_videos');
    }

    public function getStatus(){
        return $this->status == 1 ? 'Active' : 'Not Active';
    }
}
