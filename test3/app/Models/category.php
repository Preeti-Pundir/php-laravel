<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SofeDeletes;

class category extends Model
{
    
    use SofeDeletes;
    protected $fillable = [
        'user_id',
        'category_name',
        
    ];
   
}
