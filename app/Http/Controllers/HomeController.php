<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function bill(){
        return view('bill');
    }
    public function product(){
        return view('product');
    }
}
