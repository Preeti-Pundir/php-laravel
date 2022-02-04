<?php

use Illuminate\Support\Facades\Route;
use app\models\user;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo 'testcontrol';
    //return view('welcome');
});

Route::get('/about', function () {
   // echo 'testcontrol';
    return view('about');
}) -> middleware('age');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
route::get('comment','App\Http\Controllers\commentController@index');
route::get('post','App\Http\Controllers\PostController@create');
route::get('sab','App\Http\Controllers\categorycontroller@sab');
route::get('index','App\Http\Controllers\Contactcontroller@index');
route::get('abc','App\Http\Controllers\Contactcontroller@index')->name('aryian');
//categoruucontroller


route::get('/category/all','App\Http\Controllers\categorycontroller@sab')->name('all.category');

route::post('/category/add','App\Http\Controllers\categorycontroller@addcat')->name('store.category');

route::middleware(['auth:sanctum','verified'])->get('/dashboard',function()
{
   // $users = user::all();

    $users = DB::table('users')-> get();


    return view('dashboard',compact('users'));
}
)-> name('dashboard');



