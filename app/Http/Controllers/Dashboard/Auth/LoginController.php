<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Requests\Dashboard\Login;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function loginPage(){

        return view('dashboard.login');
    }


    public function login(Login $request){

        dd($request->all());
        //if(auth()->guard('dashboard'))
    }
}
