<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class BlogController_2 extends Controller
{
    function index()
    {
        return view('blog.index');
    }
    function submit(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|min:2',
            'description'=>'required|string|min:5'
        ]);
        $data['user_id'] = 1;
        // Blog::create($data);
        // return to_route('blog.index')->with("Success","Blog Created Successfully");
        // $blog = new Blog();
        // $blog->user_id = 1;
        // $blog->title =$data['title'];
        // $blog->description =$data['description'];
        // $blog->save();
        // if ($blog) {
        //     return "Inserted";
        // } else {
        //     return"Form Not Submited";
        // }
    }
    function edit()
    {
        return view('blog.edit');
    }
    function show()
    {
        return view('blog.show');
    }
}
