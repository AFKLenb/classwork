<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function price(){
        return view('price');
    }
    public function contacts(){
        return view('contacts');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function records(){
        return view('records');
    }
}
