<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
   
    public function index(){
        return view('index');
    }
    public function serv(){
        return view('services');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function about(){
        return view('about');
    }
    public function team(){
        return view('team');
    }
    
}
