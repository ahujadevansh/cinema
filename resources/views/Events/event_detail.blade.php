@extends('layouts.app')
{{-- <link rel="stylesheet" href="{{ asset('css/iframe.css') }}"> --}}

@section('head_extra')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
@endsection



@section('content')
    <iframe width="100%" height="300px" src="{{ $event->trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="container">
            <div class=" p-2 mr-2  mt-3">
                <div>
                    <a type="button" href="/venues/{{ $event->id }}" class="btn btn-info btn float-right">BOOK NOW</a>
                </div><br><br>
                <span class="p-2" style="background-color:white">Summary</span>
                <div class="p-3" style="background-color:white">
                    
                    <p>{{ $event->description }}</p>
                </div>
                <h2>Artist</h2>
                <div class="row">
                    
                    @if(count($artists) > 0)
                        @foreach($artists as $artist)
                            <div class="col-md-4">
                                <div class="p-1 ml-3 mt-2 mr-1">
                                    <img class="card-img-top rounded-circle" src="/storage/images/artist_pic/{{$artist->artist_pic}}" alt="{{$artist->artist_pic}}" height="200px">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $artist->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No artists found</p>
                    @endif
                </div>
        </div> 
    </div>                       
       
@endsection

