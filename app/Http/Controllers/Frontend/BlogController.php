<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 
use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Tag;
use App\Portfolio;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.blog.index', compact(
            'posts',
            'categories',
            'tags'
        ));
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $posts = Category::find($id)->Post;
        $tags = Tag::all();
        return view('pages.blog.category', compact(
            'category',
            'posts',
            'categories',
            'tags'
        ));
    }

    public function tag($id)
    {
        $tag = Tag::findOrFail($id);
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Tag::find($id)->Post;
        return view('pages.blog.tag', compact(
            'tag',
            'tags',
            'categories',
            'posts'
        ));
    }
    
    public function show($slug)
    {
        $post = Post::where('status', 'PUBLISHED', ['slug', '=', $slug])->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.blog.show', compact(
            'post',
            'categories',
            'tags'
        ));
    }
}
