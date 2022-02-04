<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
       // echo 'hello this is commentcontroller';
        return view('comment.index');
    }
}
