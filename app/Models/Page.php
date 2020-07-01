<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = ['name','describe','meta_keywords','meta_describe','status'];

    public function getStatus(){
        return $this->status == 1 ? 'Active' : 'Not Active';
    }
}
