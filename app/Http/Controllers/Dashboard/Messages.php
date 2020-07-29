<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

class Messages extends DashboardController
{
    //
    public function __construct(Message $model)
    {
        parent::__construct($model);

    }
}
