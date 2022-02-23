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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'show']);

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'show']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'show']);

Route::get('/faq', [\App\Http\Controllers\FaqController::class, 'index']);

Route::get('/post', [\App\Http\Controllers\PostsController::class, 'index']);

Route::get('/post1', [\App\Http\Controllers\Post1Controller::class, 'show']);

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show']);
