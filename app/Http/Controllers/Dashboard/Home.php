<?php

namespace App\Http\Controllers\Dashboard;
use App\models\User;
class Home extends DashboardController
{
    //
    public function __construct(User $model){
        parent::__construct($model);
    }

    public function index(){

        return view('dashboard.index');
    }
}
