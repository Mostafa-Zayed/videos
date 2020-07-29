<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\models\Skill;
use App\Models\Video;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Messages\Store;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

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

    public function category($category){

        $category = Category::select('id')->where('name','=',$category)->first();
        $videos = $category->videos;
        return view('frontend.category.index',compact('videos'));

    }

    public function skill($skill)
    {

        $skill = Skill::select('id')->where('name', '=',$skill)->first();
        $videos = $skill->videos;
        return view('frontend.category.index',compact('videos'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function video($video)
    {

        $video = Video::findOrFail($video);
        return view('frontend.videos.index',compact('video'));
    }

    public function sendMessage(Store $request){
        Message::create($request->except('_token'));
        return redirect()->route('home');
    }
}
