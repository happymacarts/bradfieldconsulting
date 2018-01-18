<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use \App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Category::orderBy('name')->get();
    	return view('categories.index',compact('categories'));
    }
	
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        		'name'=>'required|max:255'
        ]);
        
        $category = new Category;
        
        $category->name =$request->name;
        $category->save();
        
        Session::flash('success','New Category Added.');
        
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
        $category = \App\Category::find($id);
        
        return view('categories.show',compact($category));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
    	$this->validate($request, ['name'=>'required|max:255']);
    	
    	$category = Category::find($request->id);
    	
    	$category->name = $request->name;
    	$category->save();
    	
    	Session::flash('success','Category Updated.');
    	return "";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    	$category = Category::find($request->id);
    	
    	
    	$category->delete();
    	Session::flash('success','Category Deleted.');
    	return "";
    }
}
