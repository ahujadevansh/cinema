<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Format;
use App\Organiser;
use App\Artist;



class EventController extends Controller
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
        $context = array(
            'formats' => Format::all(),
            'artists' => Artist::all()
        );
        return view('Events.create')->with($context);
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
            'name' => ['required'],
            'type' => ['required'],
            'language' => ['required'],
            'certificate' => ['required'],
            'genre' => ['required'],
            'release_date' => ['required','date', 'after:yesterday'],
            'status' => ['required'],
            'duration' => ['required'],
            'description' => ['required'],
            'event_pic' => ['required', 'image', 'max:1990'],
            'trailer' => ['url','nullable'],
        ]);
        
        $event = new Event;
        $event->name = $request->input('name');
        $event->type = $request->input('type');
        $event->language = $request->input('language');
        $event->certificate = $request->input('certificate');
        $event->genre = $request->input('genre');
        $event->release_date = $request->input('release_date');
        $event->status = $request->input('status');
        $event->duration = $request->input('duration');
        $event->description = $request->input('description');

        

        if($request->hasFile('event_pic')){
            // Get filename with the extension
            $filenameWithExt = $request->file('event_pic')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('event_pic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('event_pic')->storeAs('public/images/event_pics/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $event->event_pic = $fileNameToStore;
        $event->trailer = $request->input('trailer');
        $event->save();
        $format =array();
        foreach ($request->get('format') as $item) {
            $format[] = (int) $item;
        }
        $format = Format::find($format);
        $event->formats()->attach($format);

        $artist =array();
        foreach ($request->get('artist') as $item) {
            $artist[] = (int) $item;
        }
        $artist = Artist::find($artist);
        $event->artists()->attach($artist);

        $context = array(
            'success' => 'Event Created',
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

    // public function venue()
    // {
    //     $venues = array(
    //         array(
    //             $name => 'ashok anil',
    //             $city => 'ulhasnagar',
    //             $shows => array(
    //                 '11:45', '2:30', '4:30'
    //             )
    //         ),
    //         array(
    //             $name => 'carnival: annex mall',
    //             $city => 'borovali',
    //             $shows => array(
    //                 '11:45', '2:30', '4:30', '6:30'
    //             )
    //         )
    //     );
    //     $context = array();
    //     return view('Events.venue')->with($context);
    // }

    public function event_detail()
    {
        
        return view('Events.movies')->with($context);
    }
    public function standup ()
    {
         return view('Events.standup');
    }
    public function plays ()
    {
         return view('Events.plays');
    }
    public function venue(){
        return view('Events.venue');
    }
    public function concerts(){
        return view('Events.concerts');
    }
}
