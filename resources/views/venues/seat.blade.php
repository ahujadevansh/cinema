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
                {!! Form::open(['action' => 'VenueController@book', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'name' => 'book', 'id' => 'book']) !!}
                    @csrf
                    <button type="submit" id="submit" class="btn btn-info btn float-right">PAY</button>  
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
                    <input type="hidden" name="show" value="{{$show->id}}">
                {!! Form::close() !!}
            </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script_extra')
    <script>
        $(document).ready(function(){
            $('#submit').click(function(e) {
                
                var seats = [];
                $('.seat:checked').each(function(){
                    seats.push($(this).val());
               });
               if(seats.length == 0){
                    e.preventDefault();
                    alert("no seats selected");
               }
               else{
                no_of_seats =  seats.length;  
                alert("Number of seats booked "+no_of_seats);              
                seats = JSON.stringify(seats);
                var input_seat = $("<input>").attr("type", "text").attr("name", "seats").val(seats);
                var input_no_of_seats = $("<input>").attr("type", "number").attr("name", "no_of_seats").val(no_of_seats);
                var book_form = $('form[name="book"]');
                book_form.append(input_seat);
                book_form.append(input_no_of_seats);
                book_form.submit();
            }
               
            }); 
        });
    </script>    
@endsection