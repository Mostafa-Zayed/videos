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

        if(request()->has('name') && request()->get('name') !=''){
            $rows = $rows->where('name',request()->get('name'));
        }
        return $rows;
    }// end fillter


    protected function select(){
        return ['id','name','image','email','group','status'];
    }//end with

    public function store(Store $request){

        $data = $request->all();
        if($request->has('image')){
            $image = $request->file('image');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/images/users'),$new_name);
            $data['image']= $new_name;
        }
        $data['password'] = Hash::make($data['password']);
        $this->model::create($data);
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');

    }// end create

    public function update($id,Update $request){

        $row = $this->model::findOrFail($id);

        if(isset($request['password']) && $request['password'] != '' && $request['password'] != null){
            $request['password'] = Hash::make($request->get('password'));
            $data = $request->except(['_token','_method','password_confirmation']);
        }else{
            $data = $request->except(['_token','_method','password','password_confirmation']);
        }

        if($request->has('image')){
            $image = $request->file('image');
            $new_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploades/images/users/'),$new_image);
            $data['image'] = $new_image;
        }else{
            unset($data['image']);
        }

        $row->update($data);
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index',['id'=>$id]);
    }// end update


}
