<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }
    
    public function portfolio(){
        return view('portfolio');
    }

    public function about(){
        return view('about');
    }
}
