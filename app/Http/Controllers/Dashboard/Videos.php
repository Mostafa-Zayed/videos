<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Video;
use App\Models\Skill;
use App\Models\Tage;
use App\Models\Course;
use App\Models\Category;
use App\Http\Requests\Dashboard\Videos\Store;
use App\Http\Requests\Dashboard\Videos\Update;


class Videos extends DashboardController
{

    public function __construct(Video $model){
        parent::__construct($model);
    }

    use CommentTrait;

    protected function with(){
        return ['category','user'];
    }// end with

    protected function append(){
        $data = [
            'categories' => Category::get(),
            'skills'   => Skill::get(),
            'tages'    => Tage::get(),
            'courses'  => Course::get(),
            'selectedSkills' => [],
            'selectedTages'  => [],
            'comments'       => []
        ];
        if(request()->route()->parameter('video')){
            $data['selectedSkills'] = $this->model::findOrFail(request()->route()->parameter('video'))
            ->skills()->get()->pluck('id')->toArray();
        }

        if(request()->route()->parameter('video')){
            $data['selectedTages'] = $this->model::findOrFail(request()->route()->parameter('video'))
            ->tages()->get()->pluck('id')->toArray();
        }

        if(request()->route()->parameter('video')){
            $data['comments'] = $this->model::findOrFail(request()->route()->parameter('video'))
            ->comments()->orderBy('id','desc')->with('user')->paginate(6);
        }

        return $data;
    }// end append

    public function store(Store $request){

        $data = $request->except('_token') + ['user_id' => auth()->user()->id];
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/images/videos'),$new_name);
            $data['image']= $new_name;
        }
        // check if User Selected Skill To This Video
        $row  = $this->model::create($data);
        if(isset($data['skills']) && !empty($data['skills'])){
            $row->skills()->sync($data['skills']);
        }
        // check if User Selected Tages To This Video
        if(isset($data['tages']) && !empty($data['tages'])){
            $row->tages()->sync($data['tages']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');

    }// end store

    public function update($id,Update $request){

        $row = $this->model::findOrFail($id);
        $data = $request->except(['_token','_method']);

         if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/images/videos'),$new_name);
            $data['image']= $new_name;
        }

        $row->update($data);
         // check is User Selected Skills To This Video
        if(isset($data['skills']) && !empty($data['skills'])){
            $row->skills()->sync($data['skills']);
        }
        // check if User Selected Tages To This Video
        if(isset($data['tages']) && !empty($data['tages'])){
            $row->tages()->sync($data['tages']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end update

}
