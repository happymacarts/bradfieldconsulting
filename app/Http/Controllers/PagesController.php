<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller
{
    //
	public function about()
	{
		return view('pages.about');
	}
	
	public function services()
	{
		return view('pages.services');
	}
	
	public function contact() 
	{
		return view('pages.contact');
	}
	public function contact_ana() 
	{
		return view('contact.ana');
	}
	
	public function postContact(Request $request)
	{
		$this->validate($request, [
				'email'=>'required|email',
				'message'=>'required|min:10',
				'subject'=>'required|min:3',
				'recaptcha_token' => 'required'
		]);
		
		$data =[
				'email'=>$request->email,
				'subject'=>$request->subject,
				'bodyMessage'=>$request->message
		];
		info($request);
		
		Mail::send('emails.contact', $data, function($message)use ($data){
			$message->from('info@bradfieldfieldconsulting.com'); 
			$message->to('info@bradfieldconsulting.com');
			$message->subject($data['subject']);
		});
		
		Session::flash('success',"Your email has been sent.");
		
		return redirect()->route('contact');
	}
	
	public function partners() 
	{
		return view('pages.partners');
	}
	
	public function calendar()
	{
		return view('pages.calendar');
	}
	
	public function index(Google $google)
	{
		$result = $google->getBooks();
		print_r($result);
	}
}
