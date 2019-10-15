<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organiser;
use App\Venue;
use App\Show;
use App\Event;
use App\Bill;
use App\User;

class VenueController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin', 
                            ['except' => [  'index', 'show','book',
                                            'seats']]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function book(Request $request)
    {
        $this->validate($request, [
            'seats' => ['required'],
            'no_of_seats' => ['required']
        ]);
        $bill = new Bill;
        $bill->show = $request->input('show');
        
        $bill->no_of_seats = (int) $request->input('no_of_seats');
        $bill->seats = $request->input('seats');
        $bill->date = date("Y-m-d H:i:s");
        $bill->user = auth()->user()->id;
        $show = Show::find($bill->show);
        $user = User::find($bill->user);
        $venue = Venue::find($show->venue);
        $event = Event::find($show->event_id);
        $bill->total_price = $bill->no_of_seats * $show->price;
        $bill->save();
        $context = array(
            'success' => 'Seats Booked',
            'bill' => $bill,
            'user' => $user,
            'show' => $show,
            'venue' => $venue,
            'event' => $event
        );
        return view('venues.bill')->with($context);
    }

}
