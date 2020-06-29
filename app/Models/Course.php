<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['name','category_id','type_id','describe','lectures','quizzes','price','image','pass_percentage','show','max_retakes','meta_keywords','status','meta_describe','duration','show'];
    //protected $guarded = [];


	public function users(){

		return $this->belongsToMany(User::class,'users_courses');
	}



    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
    }



}
