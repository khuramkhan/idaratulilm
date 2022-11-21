<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{

    public function login(){
        return view('admin.login');
    }
    public function posts(){
        return view('admin.posts.index');
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

}
