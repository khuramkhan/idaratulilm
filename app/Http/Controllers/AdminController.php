<?php

namespace App\Http\Controllers;

use App\Models\dailyPost;
use App\Models\NewsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{

    public function login(Request $request){
        if ($request->isMethod('post')) {
            $email = $request->get('email');
            $password = $request->get('password');
            if($email ==  'admin@gmail.com' && $password == 'admin123' ){
               return redirect('/post');
            }
        }
        return view('admin.login');
    }
    public function posts(){
        $posts = dailyPost::orderBy('id', 'desc')->get();
        return view('admin.posts.index', ['dailyPost'=> $posts]);
    }
    public function addPost(Request $request){
        if ($request->isMethod('post')) {
            $data = array();
            $data['title'] = $request->get('title');
            $data['detail'] = $request->get('detail');
            if($request->hasFile('coverImage')){
                $imageName = time().'.'.$request->file('coverImage')->extension();
                $request->file('coverImage')->move(storage_path('app/public'), $imageName);
                $imageName = $imageName;
                $data['image'] = $imageName;
                $data['created_at'] = Carbon::now();
                $data['updated_at'] = Carbon::now();
            }
            DB::table('daily_post')->insert($data);

            return back()->with('success','Data Created Successfully');
        }
        return view('admin.posts.add');
    }

    public function deletePost($id) {
        dailyPost::where('id', $id)->delete();
        return back()->with('success','Post deleted successfully');
    }


    public function news(){
        $news = NewsModel::orderBy('id', 'desc')->get();
        return view('admin.news.index', ['news'=> $news]);
    }
    public function addNews(Request $request){
        if ($request->isMethod('post')) {
            $data = array();
            $data['title'] = $request->get('title');
            $data['detail'] = $request->get('detail');
            if($request->hasFile('coverImage')){
                $imageName = time().'.'.$request->file('coverImage')->extension();
                $request->file('coverImage')->move(storage_path('app/public'), $imageName);
                $imageName = $imageName;
                $data['image'] = $imageName;
                $data['created_at'] = Carbon::now();
                $data['updated_at'] = Carbon::now();
            }
            DB::table('news')->insert($data);
            return back()->with('success','Data Created Successfully');
        }
        return view('admin.news.add');
    }

    public function deleteNews($id) {
        NewsModel::where('id', $id)->delete();
        return back()->with('success','News deleted successfully');
    }

}
