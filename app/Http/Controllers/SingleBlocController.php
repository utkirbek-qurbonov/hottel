<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleBlocController extends Controller
{
    public  function  single(){
        return view('single-blog');
    }
}
