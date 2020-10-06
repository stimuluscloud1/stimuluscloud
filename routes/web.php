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



Route::view('/', 'index');
Route::view('index', 'index');
Route::view('about', 'about');
Route::view('our-portfolio', 'portfolio');
Route::view('our-services', 'services');
Route::view('blog', 'blog');
Route::view('privacy-policy', 'privacy-policy');
Route::view('career', 'career');
Route::view('contact-us', 'contact');