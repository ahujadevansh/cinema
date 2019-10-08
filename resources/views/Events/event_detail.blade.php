<<<<<<< HEAD
=======
@extends('layouts.app')
{{-- <link rel="stylesheet" href="{{ asset('css/iframe.css') }}"> --}}
 <link rel="stylesheet" href="{{ asset('css/rating.css') }}">
 <link type="text/css" rel="stylesheet" href="{{ asset('/slider.css') }}/>
 <script type="text/javascript" src="js/slider.js"></script>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


@section('content')
<div>
    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Rbp2XUSeUNE" frameborder="0" allow=" autoplay;  gyroscope; picture-in-picture" ></iframe>
</div>
   <div class="row">
            <div class="col-md-4">
                <div class=" p-2 ml-5 mt-3">
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">2D</span>
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">IMAX 2D</span>
                    <span style="background-color:white ;font-size:20px"class="badge badge-light">IMAX 3D</span> 
                    
                </div>
                
                <div class=" p-2 ml-3  mt-3">
                        <button type="button" class="btn btn-danger">PayPal Offer</button><br><br>
                        <button type="button" class="btn btn-danger">Filmy Pass</button><br><br>
                        <button type="button" class="btn btn-danger">PayZapp Offer</button><br><br>
                </div>   
            </div>
        
            <div class="col-md-8">
                    <div class=" p-2 mr-3  mt-3">
                            <a href="#">Summary  | </a>
                            <a href="#">|  User Reviews</a>
                            <button type="button" class="btn btn-info btn float-right">Book Tickets </button>
                        <p>Summary and reviews baed on click</p>
                          <br><br>
                          <div class="MagicScroll" data-options="step: 0; speed: 4000;">
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            <img src="images/colour.jpg" />
                            
                          </div>                        
                    </div>
            </div>
        </div
@endsection
>>>>>>> be5042c21c0d522b495a81bd1d8c2a6ac147c326
