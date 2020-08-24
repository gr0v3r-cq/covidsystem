<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view("admin.categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Categories($request->all());
        if ($request->hasfile('url_image')) {
            $urlphoto = $request->file('url_image');
            $rut = public_path('/img/categories/'.$request->file('url_image')->getClientOriginalName());
            copy($urlphoto->getRealPath(),$rut);
            $categories->url_image = $request->file('url_image')->getClientOriginalName();
        }
        if ($request->cover_page) {
            $categories->cover_page = 1;
        }
        else{
            $categories->cover_page = 0;
        }

        $categories->save();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::whereId($id)->first();

        return view('admin.categories.edit', compact('category'));
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
        $category = Categories::findOrFail($id);

        $category->fill($request->all());

        if ($request->hasfile('url_image')) {
            $urlphoto = $request->file('url_image');
            $rut = public_path('/img/categories/'.$request->file('url_image')->getClientOriginalName());
            copy($urlphoto->getRealPath(),$rut);
            $category->url_image = $request->file('url_image')->getClientOriginalName();
        }
        if ($request->cover_page) {
            $category->cover_page = 1;
        }
        else{
            $category->cover_page = 0;
        }

        $category->save();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
