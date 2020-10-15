<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('blog',[PostController::class, 'blogView']);
Route::get('blog/{id}',[PostController::class, 'show']);
Route::view('privacy-policy', 'privacy-policy');
Route::view('career', 'career');
Route::view('contact-us', 'contact');
Route::view('contact-form', 'contact-form');


// Route::view('admin/index', 'admin.index')->middleware('auth');
// Route::view('admin/blog-add', 'admin.blog-add')->middleware('auth');
// Route::view('admin/blog-list', 'admin.blog-list')->middleware('auth');

Route::get('admin',[PostController::class, 'index']);
Route::get('admin/index',[PostController::class, 'index']);
Route::get('admin/blog-add', [PostController::class, 'create']);
Route::post('admin/blog-add', [PostController::class, 'store']);
Route::get('admin/blog-list', [PostController::class, 'blogList']);

//Route::get('blog-list',[PostController::class, 'blogViewAdmin']);
Route::get('admin/blog-detail/{id}',[PostController::class, 'showBlog']);
Route::get('admin/blog-detail/{id}/edit',[PostController::class, 'edit']);
Route::get('admin/blog-detail/{id}/delete',[PostController::class, 'destroy']);

Route::resource('admin/posts', 'App\Http\Controllers\PostController');