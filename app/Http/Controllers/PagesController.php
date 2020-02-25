<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('pages.index');
    }

    public function Calories(){
        return view('pages.calories');
    }

    public function Grid(){
        return view('pages.grid');
    }
}
