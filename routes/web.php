<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[HomeController::class,'aboutUs'])->name('about');
Route::match(['get', 'post'],'contact',[HomeController::class,'contactUs'])->name('contact');
Route::get('news',[HomeController::class,'news'])->name('news');
Route::get('news_detail/{id}',[HomeController::class,'newsDetail'])->name('news_detail');
Route::get('library',[HomeController::class,'library'])->name('library');
Route::get('daily_post',[HomeController::class,'dailyPost'])->name('daily_post');
