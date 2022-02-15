<?php

use App\Http\Controllers\PostsController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/post', function(){
    return view('post');
});

Route::get('/post1', function(){
    return view('post1');
});

Route::get('/profile', function(){
    return view('profile');
});
