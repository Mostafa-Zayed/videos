<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profiles';
    protected $fillable = ['about_me','address','phone','job','facebook','twitter','instagram'];
    protected $hidden = ['created_at','updated_at','user_id'];

    // relations
    public function user(){

    	return $this->belongsTo(User::class,'user_id');
    }
}
