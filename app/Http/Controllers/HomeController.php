<?php

namespace App\Http\Controllers;

use App\Models\dailyPost;
use App\Models\NewsModel;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $news = NewsModel::orderBy('id', 'desc')->limit(4)->get();
        return view('home',["news"=>$news]);
    }
    public function aboutUs(){
        return view('about_us');
    }
    public function contactUs(Request $request){
        if($_POST){
            dd('submit data');
        }
        return view('contact');
    }

    public function news(){
        $news = NewsModel::orderBy('id', 'desc')->get();
        return view('news', ['news'=> $news]);
    }

    public function newsDetail($id){
        $news = NewsModel::where('id', $id)->first();
        return view('news_detail', ['news'=> $news]);
    }

    public function dailyPost(){
        $news = dailyPost::orderBy('id', 'desc')->get();
        return view('daily_post', ['dailyPost'=> $news]);
    }

    public function library(){
        return view('library');
    }

}
