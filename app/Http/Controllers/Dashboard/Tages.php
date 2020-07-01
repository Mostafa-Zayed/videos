<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tage;
use App\Http\Requests\Dashboard\Tags\Store;
use App\Http\Requests\Dashboard\Tags\Update;
class Tages extends DashboardController
{

    public function __construct(Tage $model){
        parent::__construct($model);
    }

    public function store(Store $request){

        $this->model::create($request->except('_token'));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end update

    public function update($id,Update $request){
        $row = $this->model::findOrFail($id);
        $row->update($request->except(['_token','_method']));
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }// end update
}
