<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;

use App\Http\Requests\Dashboard\Categories\Store;
use App\Http\Requests\Dashboard\Categories\Update;
class Categories extends DashboardController
{
    //

    public function __construct(Category $model){
        parent::__construct($model);
    }
    
    public function store(Store $request){
       //dd($request->all());
    
        $this->model::create($request->all());
        //dd($request->all());
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');    
    }

    public function update($id,Update $request){
        $row = $this->model::findOrFail($id);
        $data = $request->all();
        //dd($data);
        $row->update($data);
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }
}
