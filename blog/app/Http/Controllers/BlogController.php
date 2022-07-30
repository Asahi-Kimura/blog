<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\DB; 

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        // dd($blogs);
        return view('blog',['blogs'=> $blogs]);
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

    public function blogStore(BlogRequest $request){
        $data = $request->all();

        $blog = new Blog();
        $blog->fill($data)->save();
        //一覧表示画面にリダイレクト
        return redirect(route('index'));
    }
    public function blogEdit($id){
        $blogData = Blog::find($id);
        dd($blogData);
        return view('blogEdit',['blogsData'=>$blogData]);
    }
}