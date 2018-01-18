<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB; 
use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Tag;
use App\Portfolio;

class FrontendController extends Controller
{

    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::all();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(4);
        $tags = Tag::all();
        
        return view('layouts.home', compact(
            'posts',
            'categories',
            'portfolios',
            'tags'
        ));
    }

    public function omnie()
    {
        $portfolios = Portfolio::paginate(4);
        return view('pages.omnie', compact('portfolios'));
    }
    public function oferta()
    {
        return view('pages.oferta');
    }
    public function kontakt()
    {
        return view('pages.kontakt');
    }
    public function cms()
    {
        return view('pages.cms');
    }
}
