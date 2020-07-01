<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tage extends Model
{
    //
    protected $fillable = ['name','status'];

    public function videos(){
        return $this->belongsToMany(Video::class,'tages_videos');
    }
    public function getStatus(){
        return $this->status == 1 ? 'Active' : 'Not Active';
    }
}
