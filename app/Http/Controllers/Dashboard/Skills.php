<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Skill;
use App\Http\Requests\Dashboard\Skills\Store;
use App\Http\Requests\Dashboard\Skills\Update;

class Skills extends DashboardController
{
    //
    public function __construct(Skill $model){
        parent::__construct($model);
    }
    
    public function store(Store $request){
        //$data = $request->all();    
        $this->model::create($request->all());
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
        
    
        
    }

    public function update($id,Update $request){
        $row = $this->model::findOrFail($id);
        //$data = $request->all();
        $row->update($request->all());
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.edit',['id'=>$id]);
    }
}
