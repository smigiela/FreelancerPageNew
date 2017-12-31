<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Session;
use Image;
use Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //validation
                $this->validate($request, array(
                    'title' => 'required|max:255',
                    'slug' => 'required|min:5|max:180',
                    'body' => 'required',
                    'category_id' => 'integer|required',
                    'post_image' => 'sometimes|image',
                    'status' => 'required'
                ));
                
                //save post to database
                $post = new Post;
                $post->title = $request->title;
                $post->slug = $request->slug;
                $post->body = $request->body;
                $post->category_id = $request->category_id;
                $post->subtitle = $request->subtitle;
                $post->keywords = $request->keywords;
                $post->meta_content = $request->meta_content;
                $post->status = $request->status;        
        
                if($request->hasFile('post_image')){
                    $image = $request->file('post_image');
                    $filename = time() . '.' . $image->getClientOriginalExtension();
                    $location = public_path('img/blog/' . $filename);
                    Image::make($image)->save($location);
        
                    $post->image = $filename;
                }        
        
                $post->save();
        
                $post->Tag()->sync($request->tags, false);
        
                Session::flash('success', 'Dodano post.');
             
                return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.show', compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        return view('admin.posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|min:5|max:180',
            'body' => 'required',
            'category_id' => 'integer|required',
            'image' => 'sometimes|image',
            'status' => 'required'
        ));
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->subtitle = $request->subtitle;
        $post->keywords = $request->keywords;
        $post->meta_content = $request->meta_content;
        $post->status = $request->status;
        
        if($request->hasFile('post_image')){
            //add the new photo
                $image = $request->file('post_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/blog/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $post->image;

            //update the database
                $post->image = $filename;
            //add the new photo
                Storage::delete($oldFilename);
        }

        $post->save();

        $post->tag()->sync($request->tags);
        Session::flash('success', 'Zaktualizowano post.');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tag()->detach();
        Storage::delete($post->image);

        $post->delete();


        Session::flash('success', 'Pomyślnie usunięto post');

        return redirect()->route('posts.index');
    }
}
