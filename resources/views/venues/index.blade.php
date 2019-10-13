@extends('layouts.app')
@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/venue.css') }}">
     <script type="text/javascript" src="js/disable.js"></script>
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div>
  <iframe width="100%" height="300px" src="{{ $event->trailer }}" frameborder="0" allow=" autoplay;  gyroscope; picture-in-picture" ></iframe>
</div>

    <div class="row">

        <div class="col-md-10">
                <div class="topnav" id="myTopnav">
                        <a href="#home" >Today</a>
                        <a href="#news">Tomorrow</a>
                        <a href="#contact"> <?php echo date("d M", strtotime("+2 day")); ?> </a>
                        <a href="#contact"> <?php echo date("d M", strtotime("+3 day")); ?> </a>
                        <a href="#contact"> <?php echo date("d M", strtotime("+4 day")); ?> </a>
                        
                </div>
                <br>
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Theater</th>
                            <th>Shows</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($venues) > 0)
                                @foreach($venues as $venue)
                                    <tr>
                                        <td>{{$venue->name}}</td>
                                        @php
                                            $shows = App\Show::where('venue', $venue->id)
                                                                ->where('event_id', $event->id)
                                                                ->get();
                                        @endphp
                                        @if(count($shows) > 0)
                                            @foreach($shows as $show)
                                                @if($venue->id == $show->venue)
                                                    <td><a href="/seats/{{ $show->id }}" class="btn btn-outline-primary">{{ $show->time }}</a></td>
                                                @endif
                                            @endforeach
                                        @else
                                                No Show
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                    No Theater
                            @endif
                        </tbody>
                      </table>
        </div>
        <div class="col-md-2">
            <br>
            <img width="90%" height="180px" src="https://media.giphy.com/media/3o7rc0qU6m5hneMsuc/giphy.gif">
            <br>
            <br>
            <br>
            <img width="90%" height="500px" src="images/pepsi.jpg">
            <br>



        </div>
    </div>
@endsection
