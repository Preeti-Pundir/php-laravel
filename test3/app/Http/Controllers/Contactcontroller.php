<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function index()
    {
        echo 'test is base class';
        return view('welcome');
    }
}
