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
            <h3>Price: ₹ {{$show->price}}</h3>
            <table class="table table-borderless">
            <thead>
                <tr>
                <th scope="col"> </th>
                @for ($i = 1; $i <= 12; $i++)
                <th scope="col">&nbsp;{{ $i }}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                {!! Form::open(['action' => 'ShowController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'name' => 'book', 'id' => 'book']) !!}
                    <button type="button" id="submit" class="btn btn-info btn float-right">PAY NOW</button>  
                    @php
                        $str = array('A','B','C','D','E','F','G','H');
                    @endphp
                    @foreach($str as $i)
                        <tr>
                        <td ><b> {{$i}}</b></td>
                        {{-- @if($i == "A")
                            <hr><h1>Executive class</h1>
                        @endif --}}
                        @for($j=1; $j <= 12; $j++)
                            <td>
                                @if($i == "A" or $i == "B" or $i == "C")
                                    
                                    <input type="checkbox" class="seat"  style="zoom: 2;" value="{{$i}}{{$j}}" >
                                    
                                @else
                                    @if($j != 5 and $j != 6)
                                        <input type="checkbox" class="seat"  style="zoom: 2;" value="{{$i}}{{$j}}" >
                                    @endif
                                @endif
                            </td>
                        @endfor
                        </tr>
                        {{-- @if($i == "C")
                            <hr>
                        @endif --}}
                    @endforeach
                    <tr><td></td></tr>
                    <tr><td></td> </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td   class="bg-primary" style="border-radius:25px;text-align:center" colspan="9">Screen This Way</td>
                    </tr>
                {!! Form::close() !!}
            </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script_extra')
    <script>
        $(document).ready(function(){
            $('#submit').click(function() {

                var seats = array();
                $('.seat:checked').each(function(){
                    seats.push($(this).val());
               });
               
            }); 
        });
    </script>    
@endsection