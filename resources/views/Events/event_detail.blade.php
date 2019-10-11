@extends('layouts.app')
{{-- <link rel="stylesheet" href="{{ asset('css/iframe.css') }}"> --}}

@section('head_extra')
 <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
 <link rel="stylesheet" href="{{ asset('css/division.css') }}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
@endsection



@section('content')
<div>
<iframe width="100%" height="300px" src="{{ $event->trailer }}" frameborder="0" allow=" autoplay;  gyroscope; picture-in-picture" ></iframe>
</div>
   <div class="row">
            <div class="col-md-4">
                <div class=" p-2 ml-5 mt-3">
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">2D</span>
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">IMAX 2D</span>
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">IMAX 3D</span> 
                    
                </div>
                
                <div class=" p-2 ml-3  mt-3">
                   <div class="container">
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
                    <div id="demo" class="collapse">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                   </div>
                </div>   
            </div>
        
            <div class="col-md-8">
                    <div class=" p-2 mr-2  mt-3">
                        <div  aria-label="Basic example">
                            <button type="button" class="btn btn-light">Summary</button>
                            <button type="button" class="btn btn-light">User Review</button>

                            <a type="button" href="/venues/{{ $event->id }}" class="btn btn-info btn float-right">BOOK NOW</a>
                        </div>
                        <br>
                        <br>
                        <div class="division">
                            <p>{{ $event->description }}</p>
                        </div>
                        
                        {{-- <div class="container text-center my-3">
                                <h2>Bootstrap 4 Multiple Item Carousel</h2>
                                <div class="row mx-auto my-auto">
                                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=2">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=3">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=4">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=5">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block col-2 img-fluid" src="http://placehold.it/350x180?text=6">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <h4>Advances one slide at a time</h4>
                            </div> --}}

                            


                        

                        
                            
                    </div>                        
            </div>
    </div>
        
@endsection

