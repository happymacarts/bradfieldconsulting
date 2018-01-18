<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Session;

class TagController extends Controller
{
    public function __construct() 
    {
    	
    }
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = Tag::orderBy('name')->paginate(10);
        return view('tags.index',compact('tags'));
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
    	$tag = new Tag;
    	$tag->name = $request->name;
    	$tag->save();
    	
    	Session::flash('success','New Tag Added.');
    	
    	return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $tag = Tag::find($tag->id);
        return view('tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
        $tag = \App\Tag::find($tag->id);
        
        $tags = Tag::orderBy('name')->paginate(10);
        return view('tags.index',compact('tags','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, ['name'=>'required|max:255']);
        
        $tag = Tag::find($request->id);
        
        $tag->name = $request->name;
        $tag->save();
        
        Session::flash('success','Tag Updated.');
        return "";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$tag = \App\Tag::find($id);
        $tag->posts()->detach();
        
        $tag->delete();
        
        Session::flash('success', 'Your tag has been deleted');
        
        return "";
    }
}
