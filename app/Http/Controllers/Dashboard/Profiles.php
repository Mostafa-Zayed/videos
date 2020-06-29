<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Course;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class Profiles extends Controller
{
    //

    public function index(){

    $category = Category::with('courses')->find(1);
    return $category;

    }
}
