<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class TravelBlogController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('travelblog',['blog'=>$blog]);
    }

    public function show($id){
        $blogid= Blog::find($id);
        return view('telusuri',['blogid'=> $blogid]);
    }
}


