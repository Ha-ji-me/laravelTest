<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function test()
    {
        $text = ['msg' => 'こんにちは私はコントローラーです'];
        return view('test' ,$text);
    }

}



