<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        return view('home');
    }*/
    
    public function index(Google $google)
    {
    	$result = $google->getBooks();
    return 	print_r($result);
    	
    //	return view('home');
    }
}
