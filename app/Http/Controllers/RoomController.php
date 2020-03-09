<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public  function room(){
        $rooms = Room::All();
        return view('room',compact('rooms'));
    }
}
