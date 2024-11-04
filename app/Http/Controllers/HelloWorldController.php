<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('hello-world',[
            'text'=> 'Este es el texto de mi mundo'
        ]);
    }
}
