<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create() {
        $varPortfolio = Portfolio::all();
        return view('admin.portfolio.portfolioCreate', compact('varPortfolio'));
    }
    public function store(Request $request){
        $portfolioItem = new Portfolio();
        $portfolioItem->image = $request->image;
        $portfolioItem->titre = $request->titre;
        $portfolioItem->texte = $request->texte;
        $portfolioItem->save();
        return redirect()->route('home');
    }
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->back();
    }
}
