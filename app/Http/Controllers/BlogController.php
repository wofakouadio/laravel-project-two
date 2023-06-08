<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //load all blog posts
    public function index(){
        return view('blog.index',
            ['blogs' => Blogs::latest()->filter(request(['search', 'tag', 'category']))->paginate(8)]
        );
    }

    //display blog post creation
    public function create(){
        return view('blog.create',
//            ['blogs' => Blogs::latest()->paginate(8)]
            ['blogs'=>Auth::user()->blogs()->paginate(8)]
        );
    }

    //create new blog
    public function store(Request $request){
        $NewBlogForm = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'img' => 'required|mimes:png,jpg,jpeg'
        ]);
        $NewBlogForm['user_id'] = Auth::user()->id;
        $NewBlogForm['author_name'] = Auth::user()->fullname;
        if($request->hasFile('img')){
            $NewBlogForm['img'] = $request->file('img')->store('img', 'public');
        }
        if(Blogs::create($NewBlogForm)){
            toastr()->success('Blog created successfully', 'Blog Notification');
            return redirect('/blog/create');
        }
        else{
            toastr()->error('Blog failed to be created', 'Blog Notification');
            return back();
        }

    }

    //show a single blog
    public function show(Blogs $blog){
        return view('blog.show', [
            'blog' => $blog
        ]);
    }

    //Manage blog view
    public function manage(){
        return view('/blog/manage', [
            'blogs'=>Auth::user()->blogs()->get()
        ]);
    }

}
