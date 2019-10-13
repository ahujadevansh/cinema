@extends('layouts.app')
@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/venue.css') }}">
     <script type="text/javascript" src="js/disable.js"></script>
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

    <div class="container">
        <div class="table-responsive-md mt-3">
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
                
                @php
                    $str = array('A','B','C','D','E','F','G','H');
                @endphp
                @foreach($str as $i)
                    <tr>
                    <td ><b> {{$i}}</b></td>
                    @for($j=1; $j <= 12; $j++)
                        <td>
                            <input type="checkbox" class="seat"  style="zoom: 2;" value="{{$i}}{{$j}}" >
                        </td>
                    @endfor
                    </tr>
                @endforeach
                <tr><td></td></tr>
                <tr><td></td> </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td   class="bg-primary" style="border-radius:25px;text-align:center" colspan="9">Screen This Way</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
@endsection


