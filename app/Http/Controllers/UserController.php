<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function register(Request $request)
    {
        return view('hotel');
    }

    public function viewhotel(){
        return view('welcome');
    }
}



//ORM eloquent
//database untuk book
//create controller bookcontroller
//mvc untuk connect database