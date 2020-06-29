<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\User;
use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Requests\Dashboard\Users\Update;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class Users extends DashboardController
{
    public function __construct(User $model){
        parent::__construct($model);
    }


    protected function fillter($rows){

        if(request()->has('first_name') && request()->get('first_name') !=''){
            $rows = $rows->where('first_name',request()->get('first_name'));
        }
        return $rows;
    }

    /*protected function with(){

        return [
            'name',''
        ];
    }*/

    protected function select(){
        return ['id','name','image','email','group','status'];
    }//end with

    public function store(Store $request){

        $data = $request->all();
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/users'),$new_name);
            $data['image']= $new_name;
        }
        $data['password'] = Hash::make($data['password']);
        $this->model::create($data);
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');



    }

    public function update($id,Update $request){

        $row = $this->model::findOrFail($id);
        $rules = ['password' => ['required', 'string', 'min:8', 'confirmed']];
        $data = $request->all();
        if(isset($data['password']) && $data['password'] != ''){
            $this->validate($request->get('password'),$rules);
            $data = $data + ['password' => Hash::make($request->get('password'))];
        }else{
            unset($data['password']);
        }
        if($request->has('image')){
            $image = $request->file('image');
            $new_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/users/'),$new_image);
            $data['image'] = $new_image;
        }else{
            unset($data['image']);
        }
        $row->update($data);
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }


}
