<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
class DashboardController extends Controller{

    use CommentTrait;
    protected $model;
    protected $modelName;
    protected $modelNamePlural;
    protected $lowerModelNamePlural;
    public function __construct(Model $model){

        $this->model = $model;
        $this->modelName = $this->getModelname();
        $this->modelNamePlural = $this->pluralModelName();
        $this->lowerModelNamePlural = $this->lowerPluralModelName();
    }

    private function getModelName(){
        return class_basename($this->model);
    }//end getModelName

    protected function pluralModelName(){
        return str_plural($this->getModelName());
    }//end pluralModelName

    protected function lowerPluralModelName(){
        return strtolower($this->pluralModelName());
    }//end lowerPluralModelName

    protected function fillter($rows){
        return $rows;
    }//end fillter

    protected function with(){
        return [];
    }//end with

    protected function select(){
        return [];
    }//end with

    protected function append(){
        return [];
    }//end append

    public function index(){

        $rows = $this->model;
        $rows = $this->fillter($rows);
        $with = $this->with();
        $selects = $this->select();
        if(!empty($selects)){
            $rows = $rows::select($selects);
        }
        if(!empty($with)){
            $rows = $rows::with($with);
        }
        $rows = $rows->latest()->paginate(10);

        $model = $this->modelName;
        $models = $this->lowerModelNamePlural;
        $method = __FUNCTION__;
        $pageTitle = 'Control '.$this->modelNamePlural;

        return view('dashboard.'.$models.'.'.$method,compact('rows','model','models','method','pageTitle'));
    }//end index


    //create
    public function create(){
        $model = $this->modelName;
        $models = $this->lowerModelNamePlural;
        $method = __FUNCTION__;
        $pageTitle = ucfirst($method).' '.$model;
        $pageDesc  = 'Here You Can '.$pageTitle;
        $append    = $this->append();
        return view('dashboard.'.$models.'.'.$method,compact('model','pageTitle','pageDesc','models','method'))->with($append);
    }//end create


    //edit
    public function edit($id){
        $model = $this->modelName;
        $models = $this->lowerModelNamePlural;
        $method = __FUNCTION__;
        $pageTitle = ucfirst($method).' '.$model;
        $pageDesc  = 'Here You Can '.$pageTitle;
        $row = $this->model::findOrFail($id);
        $append = $this->append();
        return view('dashboard.'.$models.'.'.$method,compact('row','model','models','pageTitle','pageDesc','method'))->with($append);
    }//end edit


    //destroy
    public function destroy($id){
        $row = $this->model::findOrFail($id)->delete();
        return redirect()->route('dashboard.'.$this->lowerModelNamePlural.'.index');
    }//end destroy

}
