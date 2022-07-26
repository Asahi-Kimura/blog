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

    public function showDetail($id){
        
        $blog = Blog::find($id);
        // dd($blog);
        if(is_null($blog)){
            session()->flash('err','データがありません');
            return redirect(route('index'));
        }
        
        return view('showDetail',['blog'=> $blog]);
    }
}
