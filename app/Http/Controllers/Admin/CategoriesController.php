<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Session;



class CategoriesController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.categories.index', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:50',
            'description' => '|max:255'
        ));       

        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;
        
        $category->save();

        Session::flash('success', 'Dodano kategorię pomyślnie');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $posts = Category::find($id)->Post;
        return view('admin.categories.show', compact('category', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $posts = Category::find($id)->Post;
        return view('admin.categories.edit', compact('category', 'posts'));
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
            'name' => 'required|max:50',
            'description' => 'required|max:255'
        ));          
        

        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;
        
        $category->save();

        Session::flash('success', 'Zaktualizowano kategorię pomyślnie');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'Pomyślnie usunięto kategorię');
        return redirect()->route('categories.index');
    }
}
