@extends('layouts.app')
@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/venue.css') }}">
     {{-- <script type="text/javascript" src="js/disable.js"></script> --}}
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

@section('content')


    <div class="container">
    
        <div class="table-responsive-md mt-3">
            <table class="table table-hover table-dark table-striped" style="color:white">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center">Bill</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                </tr>
                <tr>
                    <th>Event</th>
                    <td>{{$event->name}}</td>
                </tr>
                <tr>
                    <th>Venue</th>
                    <td>{{$venue->name}}</td>
                </tr>
                <tr>
                    <th>Show</th>
                    <td>{{$show->time}}</td>
                </tr>
                <tr>
                    <th>No of Tickets</th>
                    <td>{{$bill->no_of_seats}}</td>
                </tr>
                <tr>
                    <th>Seats</th>
                    <td>{{$bill->seats}}</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>₹ {{$bill->total_price}}</td>
                </tr>                                                      
            </tbody>
            </table>
        </div>
    </div>
@endsection