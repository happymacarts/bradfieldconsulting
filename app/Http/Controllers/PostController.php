<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;
use Purifier;
use Image;
use Storage;

class PostController extends Controller
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
        
        $posts = Post::orderBy('id','desc')
        	->paginate(10);
        
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $tags = \App\Tag::orderBy('name','asc')->get();
    	return view('posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        
        $this->validate($request, array(
        		'title'			=>'required|max:255',
        		'slug'			=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
        		'featured_image'=>'sometimes|image',
        		'category_id'	=>'required|integer',
        		'body'			=>'required'
        		
        ));
        
    	//store in db
    	$post = new Post;
    	$post->title = $request->title;
    	$post->slug = $request->slug;
    	$post->category_id = $request->category_id;
    	$post->body = Purifier::clean($request->body);
    	
    	if($request->hasFile('featured_image')){
    		$image = $request->file('featured_image');
    		$filename = time().'.'. $image->getClientOriginalExtension();
    		$location = public_path('images/uploads/'.$filename);
    		Image::make($image)->resize(800,400, function ($constraint) {
    			$constraint->aspectRatio();
    			$constraint->upsize();
    		})->save($location);
    		$post->image = $filename;
    	}
    	
    	$post->save();
    	
    	
    	
    	$post->tags()->sync($request->tags, false);
        
        Session::flash('success','The Blog post has been saved.');
    	//redirect
    	return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    	$item = Post::find($post->id);
    	
    	
        return view('posts.show')->with('post',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::find($post->id);
        $categories = \App\Category::all();
        $cats =[];
        foreach($categories as $category){
        	$cats[$category->id]=$category->name;
        }
        $tags = \App\Tag::orderBy('name','asc')->get();
        $tags2=[];
        foreach($tags as $tag){
        	$tags2[$tag->id]=$tag->name;
        }
      
        return view('posts.edit')
        	->withPost($post)
 	        ->withCategories($cats)
        	->with('tags',$tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    	$item = Post::find($post->id);
    	
    	if($request->input('slug') == $item->slug){
    		$this->validate($request, array(
    				'title'=>'required|max:255',
    				'body'=>'required',
    				'category_id'	=>'required|integer'
    		));
    	}
    	else{
    	
	    	$this->validate($request, array(
	    			'title'=>'required|max:255',
	    			'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
	    			'category_id'	=>'required|integer',
	    			'body'=>'required'
	    	));
    	}
    	//store in db
    	
    	
    	$item->title = $request->input('title');
    	$item->slug = $request->slug;
    	$item->category_id = $request->input('category_id');
    	$item->body = Purifier::clean($request->input('body'));
    	
    
    		
    	if($request->hasFile('featured_image')){
    			
    		// add new photo
    		
    		$image = $request->file('featured_image');
    		$filename = time().'.'. $image->getClientOriginalExtension();
    		$location = public_path('images/uploads/'.$filename);
    		Image::make($image)->resize(800,400, function ($constraint) {
    			$constraint->aspectRatio();
    			$constraint->upsize();
    		})->save($location);
    		$oldFilename = $item->image;
    			
    		//update db	
    		
    		$item->image = $filename;
    		
    		//delete old photo
    		Storage::delete($oldFilename);
    		
    	}

    	$item->save();
    	
    	if(isset($request->tags)){
    		$item->tags()->sync($request->tags, true);
    	}else{
    		$item->tags()->sync(array(), true);
    	}
    	
    	//Flash
    	Session::flash('success','The Blog post has been updated.');
    	
    	//redirect
    	return redirect()->route('posts.show', $item->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    	$item = Post::find($post->id);
    	$item->tags()->detach();
    	
    	Storage::delete($item->image);
    	$item->delete();
    	
    	
    	
    	Session::flash('success','The Blog post has been removed.');
        return redirect()->route('posts.index');
    }
}



