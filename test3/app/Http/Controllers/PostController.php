<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        //echo 'hello this is postcontroller';
        return view('post.index');
    }
}
