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
            <table class="table table-borderless">
            <thead>
                <th scope="col">&nbsp;{{ $i }}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
        </div>
    </div>
@endsection