<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }
    public function Latihan()
    {
        return view('Latihan');
    }
    public function template1()
    {
        return view('template1');
    }
    public function js1()
    {
        return view('js1');
    }
    public function js2()
    {
        return view('js2');
    }
    public function bootstrap1()
    {
        return view('bootstrap1');
    }
    public function linktree()
    {
        return view('linktree');
    }
    public function pertama()
    {
        return view('pertama');
    }
    public function PR4()
    {
        return view('PR4');
    }
    public function frontend()
    {
        return view('publishfrontend');
    }
    public function ets()
    {
        return view('ets');
    }
}
