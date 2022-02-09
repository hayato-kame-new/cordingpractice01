<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practice01Controller extends Controller
{
    public function index()
    {
        return view('practice01.index');
    }
}
