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
}
