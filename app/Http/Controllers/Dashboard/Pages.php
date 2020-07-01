<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Page;
use App\Http\Requests\Dashboard\Pages\Store;
use App\Http\Requests\Dashboard\Pages\Update;

class Pages extends DashboardController
{
    //
    public function __construct(Page $model){
        parent::__construct($model);
    }

    public function store(Store $request){

        $this->model::create($request->except('_token'));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end store

    public function update($id,Update $request){
        $row = $this->model::findOrFail($id);
        $row->update($request->except(['_token','_method']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end update
}
