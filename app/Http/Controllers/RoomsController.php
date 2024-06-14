<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function indexpage(){
        return view('rooms.welcome');
    }
}
