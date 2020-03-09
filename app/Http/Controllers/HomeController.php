<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function home(){
        $rooms = Room::All();
//        dd($rooms);
        return view('welcome',compact('rooms'));
    }
}
