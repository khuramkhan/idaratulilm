<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
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
Route::match(['get', 'post'],'/admin',[AdminController::class,'login'])->name('admin');
Route::match(['get', 'post'],'/post',[AdminController::class,'posts'])->name('post');
Route::match(['get', 'post'],'/add_post',[AdminController::class,'addPost'])->name('addPost');
Route::match(['get', 'post'],'/delete_post/{id}',[AdminController::class,'deletePost'])->name('deletePost');

Route::get('/view_news',[AdminController::class, 'news'])->name('viewNews');
Route::match(['get', 'post'],'/add_news',[AdminController::class,'addNews'])->name('addNews');
Route::match(['get', 'post'],'/delete_news/{id}',[AdminController::class,'deleteNews'])->name('deleteNews');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[HomeController::class,'aboutUs'])->name('about');
Route::match(['get', 'post'],'contact',[HomeController::class,'contactUs'])->name('contact');
Route::get('news',[HomeController::class,'news'])->name('news');
Route::get('news_detail/{id}',[HomeController::class,'newsDetail'])->name('news_detail');
Route::get('library',[HomeController::class,'library'])->name('library');
Route::get('daily_post',[HomeController::class,'dailyPost'])->name('daily_post');
