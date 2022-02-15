<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return 'Hello BITM';
    }
    public function bitm()
    {
        return view('demo');
    }
}
