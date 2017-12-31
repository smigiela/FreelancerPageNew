<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB; 
use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Tag;
use App\Portfolio;

class BackendController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $posts = Post::where('status', 'DRAFT')->orderBy('created_at', 'desc')->paginate(5);
        $tags = Tag::all();
        $categories = Category::all();
        $portfolios = Portfolio::all();
        $comments = Comment::where('status', 'WAITING')->orderBy('id', 'desc')->paginate(5);
        
        return view('admin.admin', compact(
            'users',
            'posts',
            'tags',
            'categories',
            'portfolios',
            'comments'
        ));
    }
}
