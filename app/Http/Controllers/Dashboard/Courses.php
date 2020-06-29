<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Courses\Store;
use App\Http\Requests\Dashboard\Courses\Update;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Category;
use App\Models\Type;
class Courses extends DashboardController
{
    //
    public function __construct(Course $model){
        parent::__construct($model);
    }

    protected function append(){

    	$data = [

    		'categories' => Category::get(),
    		'instructors' => Instructor::get(),
            'types'       => Type::get(),
            'selectInstructors' => []

    	];
        if(request()->route()->parameter('course')){
            $data['selectInstructors'] = $this->model::findOrFail(request()->route()->parameter('course'))
            ->instructors()->get()->pluck('id')->toArray();
        }

    	return $data;
    }

    public function store(Store $request){

        $data = $request->all();
        //dd($request->all());
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);

            $data['image']= $new_name;
        }

        //dd($data);
         $row = $this->model::create($data);
        //dd($data);
        if(isset($data['instructors']) && !empty($data['instructors'])){
            $row->instructors()->sync($data['instructors']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }

    public function update($id,Request $request){

        $data = $request->all();
        //dd($data);
        $row = $this->model::findOrFail($id);
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);
            $data['image']= $new_name;
           
        }
        //dd($data);
        $row->update($data);

        if(isset($data['instructors']) && !empty($data['instructors'])){
            $row->instructors()->sync($data['instructors']);
        }
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$row->id]);
    }
}
