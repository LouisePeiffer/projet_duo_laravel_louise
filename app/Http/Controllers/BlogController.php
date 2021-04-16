<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // public function index() {
    //     $varBlog = Blog::all();
    //     return view('pages.blog', compact('varBlog'));
    // }
    // public function create() {
    //     return view('admin.blog.blogCreate');
    // }
    public function create() {
        $varBlog = Blog::all();
        return view('admin.blog.blogCreate', compact('varBlog'));
    }
    public function store(Request $request) {
        $blogItem = new Blog();
        $blogItem->image = $request->image;
        $blogItem->titre = $request->titre;
        $blogItem->texte = $request->texte;
        $blogItem->save();
        return redirect()->route('home');
    }
    public function destroy(Blog $id){
        $id->delete();
        return redirect()->back();
    }
}
