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

// Route::get('/', function () {
//     return view('welcome');
    
// });

// Route::get('/about', function () {
    
//     return "Hi This is about Page";
// });

// Route::get('/contact', function () {
    
//     return "Hi This is Contact Page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
    
//     return "This is Post No. ".$id. " " .$name;
// });

// //Naming the Routes
// Route::get('admin/post/example', array('as'=>'admin.home', function(){

// 	$url = route('admin.home');
// 	return"The current URL is ".$url;


// }));

// Route::get('/post/{id}', 'App\Http\Controllers\PostsController@index');

// Route::resource('post', 'App\Http\Controllers\PostsController');

Route::get('/contact/', 'App\Http\Controllers\PostsController@contact');

Route::get('/post/', 'App\Http\Controllers\PostsController@show_post');