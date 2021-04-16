<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        return view('admin.adminHome');
    }
    // public function portfolio() {
    //     $varPortfolio = Portfolio::all();
    //     return view('admin.portfolio.portfolioCreate', compact('varPortfolio'));
    // }
    // public function blog() {
    //     $varBlog = Blog::all();
    //     return view('admin.blog.blogCreate', compact('varBlog'));
    // }
}
