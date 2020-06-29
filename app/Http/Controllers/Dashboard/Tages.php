<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tage;
use App\Http\Requests\Dashboard\Tags\Store;
use App\Http\Requests\Dashboard\Tags\Update;
class Tages extends DashboardController
{
    //
    public function __construct(Tage $model){
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
