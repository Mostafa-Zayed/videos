<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\models\Skill;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\ProgramType;
use App\Models\Course;
use App\Models\Programe;
use App\Models\Instructor;
use App\Models\Scholarships;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //view::share('courses',Course::where('show',1)->get());
        //view::share('scholarships',Scholarships::where('show',1)->get());
        //view::share('programtypes',ProgramType::all());
        //view::share('instructors',Instructor::where('show',1)->get());

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $videos = Video::orderBy('id','desc')->paginate(20);
        return view('home',compact('videos'));
    }

    public function courses()
    {
        $courses = Course::all();
        return view('front-end.courses.index',['courses'=>$courses]);
    }
    public function course($id)
    {
        $course = Course::findOrFail($id);
        return view('front-end.courses.single-course',['course'=>$course]);
    }

    public function contact(){
        dd('contact');
    }
    public function category($category){

        $category = Category::select('id')->where('name','=',$category)->first();
        $videos = $category->whereHas('videos')->paginate(8);
        return view('frontend.category.index',compact('videos'));
    }

    public function skill($skill)
    {

        $skill = Skill::select('id')->where('name', '=',$skill)->first();
        $videos = $skill->videos;
        return view('frontend.category.index',compact('videos'));
    }

    public function video($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.index',compact('video'));
    }
}
