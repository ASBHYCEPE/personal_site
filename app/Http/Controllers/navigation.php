<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigation extends Controller
{
    public function index(){
        return view('index');
    }

    public function aboutMe(){
        return view("about");
    }

    public function game(){
        return view("game");
    }
}
