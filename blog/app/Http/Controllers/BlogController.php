<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        // dd($blogs);
        return view('blogs',['blogs'=> $blogs]);
    }

    public function blogDetail($id){
        
        $blog = Blog::find($id);
        // dd($blog);
        if(is_null($blog)){
            session()->flash('err','データがありません');
            return redirect(route('index'));
        }
        
        return view('blogDetail',['blog'=> $blog]);
    }

    public function blogCreate(){
        return view('blogCreate');
    }

    public function blogStore(Request $request){
        $attributes = $request->all();
        dd($attributes);
        // $attributes->save();

        //一覧表示画面にリダイレクト
        return redirect(route('blogCreate'));
    }
}