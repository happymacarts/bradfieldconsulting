<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Subscription;
use Session;
use Mail;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        		'email'=>'required|email|unique:subscriptions'
        ]);
        
        $sub = new Subscription;
        $sub->email = $request->email;
        $sub->save();
        
        $data =[
                'email'=>$request->email,
                'subject'=>"New user subscription to Bradfield Consulting Inc. Website",
                'bodyMessage'=>"A new User has subscribed on the website.\n $request->email"
        ];        
        Mail::send('emails.contact', $data, function($message)use ($data){
            $message->from('info@bradfieldfieldconsulting.com'); 
            $message->to('info@bradfieldconsulting.com');
            $message->subject($data['subject']);
        });


        Session::flash('success','New Email Added.');
        $result = [
            "status" => "success",
            "message" => "New Email Added."
        ];
        
        return $result;//redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
