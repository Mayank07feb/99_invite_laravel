<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function card_1()
    {
        return view('card_1');
    }
    public function card_2()
    {
        return view('card_2');
    }
    public function card_3()
    {
        return view('card_3');
    }
}
