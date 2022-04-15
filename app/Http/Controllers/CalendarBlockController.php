<?php

namespace App\Http\Controllers;

use App\CalendarBlock;
use Illuminate\Http\Request;

class CalendarBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b = \App\CalendarBlock::all();
        return dd($b);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b = CalendarBlock::all();
        
        return view('calendar-block-form',compact('b'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CalendarBlock  $calendarBlock
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarBlock $calendarBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalendarBlock  $calendarBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarBlock $calendarBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalendarBlock  $calendarBlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarBlock $calendarBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalendarBlock  $calendarBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarBlock $calendarBlock)
    {
        //
    }
}
