<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view ('superadminblog',['blog'=>$blog]);
    }

    public function show()
    {
        return view ('detailsuperadminblog');
    }

    public function showsavedata(Request $request){
       
        $blog = new Blog();
        $blog->judul_blog = $request->input('judul_blog');
        $blog->deskripsi = $request->input('deskripsi');
        $file = $request->file('photos');

        $path = $file->store('photos', 'public');
        $blog->foto_url = basename($path);
        $blog->save();

        return redirect(route('superadmin.blog'));
    }

}




