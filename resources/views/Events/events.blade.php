@extends('layouts.app')

@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/filter.css') }}">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
     @include('inc.carousel') 
     <div class="row">
          <div class="col-md-3">
               <div class=" p-2 ml-5 mt-5" style="background-color:white; width:70%">
               
                     
                    <a class="btn-design" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="true" aria-controls="collapseExample">
                         <i  class="fa fa-angle-down"></i> Language
                    </a> 
          
                    <div class="collapse" id="collapseExample1" style="padding:5px">
                         <input type="checkbox" id="test1" /> <label for="test1" >Hindi</label><br>
                         <input type="checkbox" id="test2" checked="checked" /> <label for="test2">English</label><br>
                         <input type="checkbox" id="test1" /> <label for="test1" >Tamil</label><br>
                         <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Sindhi</label><br>
                         <input type="checkbox" id="test1" /> <label for="test1" >Marathi</label><br>
                    </div>
               </div>
              
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample">
                                   <i  class="fa fa-angle-down"></i> Genre
                         </a> 
                    
                         <div class="collapse" id="collapseExample2" style="padding:5px">
                              <input type="checkbox" id="test1" /> <label for="test1" >Romantic</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Action</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >Adventure</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Horror</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >Thriller</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Animated</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >Comedy</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >Biography</label><br>
                         </div>
               
               </div>
               
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="true" aria-controls="collapseExample">
                                             <i  class="fa fa-angle-down"></i> Format
                         </a> 
                              
                         <div class="collapse" id="collapseExample3" style="padding:5px">
                              <input type="checkbox" id="test1" /> <label for="test1" >2D</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">3D</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >IMAX 2D</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">IMAX 3D</label><br>
                         </div>
               </div>
          
          </div>
      

          <div class="col-md-9 ">
               <div class="row">
                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"></p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>
               </div>
                         
          </div>
     </div>

    
@endsection