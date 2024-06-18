<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    // page d'acceuil
    public function indexpage(){
        return view('welcome');
    }

    // liste des chambres
    public function roomlist(){
        return view('rooms/roomslist');
    }

    public function roomlist2(){
        return view('rooms/roomslist2');
    }

    public function roomdetails(){
        return view('rooms/roomsdetails');
    }

    // contact
    public function contact(){
        return view('rooms/contact');
    }
}
