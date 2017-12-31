<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Portfolio;

class PortfoliosController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::paginate(5);
        return view('pages.portfolio.index', compact('portfolios'));
    }
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', '=', $slug)->first();
        return view('pages.portfolio.show', compact('portfolio'));
    }
}
