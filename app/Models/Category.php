<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    //
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    protected $fillable = ['name','icon','meta_keywords','meta_describe','status','show'];
    //protected $guarded = [];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function courses(){

    	return $this->hasMany(Course::class,'category_id','id');
    }

    public function videos(){

        return $this->hasMany(Video::class,'category_id','id');
    }

   public function getStatus(){
        return $this->status == 1 ? 'Active' : 'Not Active';
   }

   public function getShow(){
        return $this->show == 1 ? 'Show' : 'Hidden' ;
   }
}
