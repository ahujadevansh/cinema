<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use App\Show;
use App\Event;
use Auth;

class ShowController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:organiser',['except' => [  'index', 'show']]);
    }

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
    public function create(Request $request)
    {
        $organiser = Auth::id();
        $venues = Venue::where('organiser', $organiser )->get();
        $events = Event::all();
        $context = array(
            'venues'=> $venues,
            'events'=> $events
        );
        return view('shows.create')->with($context);
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
            'time' => ['required']
        ]);
        $show = new Show;
        $show->time = $request->input('time');
        $show->venue = (int) $request->input('venue');
        $show->event_id = (int) $request->input('event');
        $show->price = (float) $request->input('price');
        $show->save();
        $event = Event::find($show->event_id);
        $venue = Venue::find($show->event_id);
        $event->venues()->attach($venue);
        $event->save();
        $context = array(
            'success' => 'show Created',
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
