<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //load all blog posts
    public function index(){
        return view('blog.index');
    }

    //display blog post creation
    public function create(){
        return view('blog.create');
    }

    //show a single blog
    public function show(){
        return view('blog.show');
    }
}
