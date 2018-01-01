<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Session;
use Image;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(5);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
            'title' => 'required|max:190',
            'link' => 'required|url',
            'image' => 'sometimes|image',
            'body' => 'required'
        ));

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->image = $request->image;
        $portfolio->body = $request->body;
        $portfolio->meta_content = $request->meta_content;
        $portfolio->keywords = $request->keywords;
        $portfolio->slug = $request->slug;
        $portfolio->alt_tag = $request->alt_tag;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/portfolio/' . $filename);
            Image::make($image)->save($location);

            $portfolio->image = $filename;
        }     
        
        $portfolio->save();

        Session::flash('Success', 'Pomyślnie dodano portfolio');
        return view('admin.portfolio.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolio'));
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
            'title' => 'required|max:190',
            'link' => 'required|url',
            'image' => 'sometimes|image',
            'body' => 'required'
        ));

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->image = $request->image;
        $portfolio->body = $request->body;
        $portfolio->meta_content = $request->meta_content;
        $portfolio->keywords = $request->keywords;
        $portfolio->slug = $request->slug;
        $portfolio->alt_tag = $request->alt_tag;

        if($request->hasFile('image')){
            //add the new photo
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/portfolio/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $portfolio->image;

            //update the database
                $portfolio->image = $filename;
            //add the new photo
                Storage::delete($oldFilename);
        }
        
        $portfolio->save();

        Session::flash('Success', 'Pomyślnie dodano portfolio');
        return view('admin.portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        Session::flash('success', "Pomyślnie usunięto portfolio");
        return redirect()->route('portfolios.index');
    }
}
