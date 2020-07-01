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

        $this->model::create($request->except(['_token']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end store

    public function update($id,Update $request){
        $row = $this->model::findOrFail($id);
        $row->update($request->except(['_token','_method']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }
}
