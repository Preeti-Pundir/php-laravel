<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function sab()
    {
        //echo 'hello';
        return view('admin.category.index');
    }
   public function Addcat(REQUEST $request)
   {
        $validateddata = $request ->validate(
            [
            'category_name'=> 'required|unique: _category|max:255',
            'body' => 'required',
            ],
  
     //   [
       //     'category_name.required'=> 'Please input category name',
            
         //   'category_name.max'=> 'Please put 8 charcter',
            
        //]
  
  
  
  
    );
   }
  }
