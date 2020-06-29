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
    //
    public function __construct(Video $model){
        parent::__construct($model);
    }

    use CommentTrait;
/*
    public function index(){

        $rows = $this->model;
        $rows = $this->fillter($rows);
        $rows = $rows->paginate(10);
        $model = $this->getModelName();
        $smodel = $this->getClassNameFromModel();
        $pageTitle = 'Control '.str_plural($this->getModelName());

        return view('dashboard.'.$this->getClassNameFromModel().'.index',compact('rows','model','smodel','pageTitle'));
    }//end index
*/
    protected function with(){
        return ['category','user'];
    }
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
    }
    public function store(Store $request){
        //dd($request->all());
        $data = $request->all() + ['user_id' => auth()->user()->id];
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/images/videos'),$new_name);
            $data['image']= $new_name;
        }
        $row  = $this->model::create($data);
        if(isset($data['skills']) && !empty($data['skills'])){
            $row->skills()->sync($data['skills']);
        }

        if(isset($data['tages']) && !empty($data['tages'])){
            $row->tages()->sync($data['tages']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');

    }


    public function update($id,Update $request){

        $row = $this->model::findOrFail($id);
        $data = $request->all();

         if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/videos'),$new_name);
            $data['image']= $new_name;
        }

        $row->update($data);
        if(isset($data['skills']) && !empty($data['skills'])){
            $row->skills()->sync($data['skills']);
        }
        if(isset($data['tages']) && !empty($data['tages'])){
            $row->tages()->sync($data['tages']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }


    //create
    /*public function create(){
        $model = $this->getModelName();
        $smodel = $this->getClassNameFromModel();
        $pageTitle = 'Create '.$model;
        $pageDesc  = 'Here You Can '.$pageTitle;
        $categories = Category::get();
        return view('dashboard.'.$this->getClassNameFromModel().'.create',compact('model','pageTitle','pageDesc','smodel','categories'));
    }//end create

    //edit
    public function edit($id){
        $model = $this->getModelName();
        $smodel = $this->getClassNameFromModel();
        $pageTitle = 'Edit '.$model;
        $pageDesc  = 'Here You Can '.$pageTitle;
        $row = $this->model::findOrFail($id);
        $categories = Category::get();
        return view('dashboard.'.$this->getClassNameFromModel().'.edit',compact('row','model','smodel','pageTitle','pageDesc','categories'));
    }//end edit
    */
}
