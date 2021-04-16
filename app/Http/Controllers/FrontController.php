<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $varHome = [
            (object) [
                "image" => './img/we-are-creative.jpg',
            ]
        ];
        return view('home', compact('varHome'));
    }
    public function contact() {
        return view('pages.contact');
    }
    public function portfolio() {
        $varPortfolio = Portfolio::all();
        return view('pages.portfolio', compact('varPortfolio'));
    }
    public function blog() {
        $varBlog = Blog::all();
        return view('pages.blog', compact('varBlog'));
    }
}
