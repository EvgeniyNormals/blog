<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'PostController@show');

Route::get('/review/{post} ', 'PostController@review');






// Route::get('/blog ', function () {

// $posts=App\Post::all();

// return view('blog', compact('posts' )); 

// });
       

// Route::get('/review/{post} ', function ($id) {

//     $post=App\Post::find($id);
    
//     return view('review', compact('post' )); 
    
//     });
      
