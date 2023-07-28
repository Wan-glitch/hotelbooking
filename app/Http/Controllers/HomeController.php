<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Pass the fetched data to the view
        return view('home');



    }
}
