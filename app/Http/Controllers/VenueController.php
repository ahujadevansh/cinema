<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organiser;
use App\Venue;
use App\Show;
use App\Event;

class VenueController extends Controller
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
        $organiser = Organiser::all();
        $context = array(
            'organisers'=> $organiser
        );
        return view('venues.create')->with($context);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required']
        ]);
        $venue = new Venue;
        $venue->name = $request->input('name');
        $venue->organiser = (int) $request->input('organiser');
        $venue->save();
        $context = array(
            'success' => 'Venue Created',
        );
        return redirect('/')->with($context);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $venues = Venue::all();
        // $shows = Show::all();
        $context = array(
            'venues' => $venues,
            // 'shows' => $shows,
            'event' => $event
        );
        return view('venues.index')->with($context);
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
    public function seats($id) {

        $show = Show::find($id);
        $context = array(
            'show' => $show
        );
        return view('venues.seat')->with($context);
    }
}
