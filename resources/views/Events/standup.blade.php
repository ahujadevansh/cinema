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
                         <i  class="fa fa-angle-down"></i> Artist
                    </a> 
          
                    <div class="collapse" id="collapseExample1" style="padding:5px">
                         <input type="checkbox" id="test1" /> <label for="test1" >Abhishek Upmanyu</label><br>
                         <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Zakir Khan</label><br>
                         <input type="checkbox" id="test1" /> <label for="test1" >Kanan Gill</label><br>
                         <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Kenny Sebastian</label><br>
                         <input type="checkbox" id="test1" /> <label for="test1" >Parvinder Singh</label><br>
                    </div>
               </div>
              
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample">
                                   <i  class="fa fa-angle-down"></i> Date
                         </a> 
                    
                         <div class="collapse" id="collapseExample2" style="padding:5px">
                              <input type="checkbox" id="test1" /> <label for="test1" >Today</label><br>
                              <input type="checkbox" id="test2" checked="checked" /> <label for="test2">Tomorrow</label><br>
                              <input type="checkbox" id="test1" /> <label for="test1" >Weekend</label><br>
                              
                         </div>
               
               </div>
               
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="true" aria-controls="collapseExample">
                                             <i  class="fa fa-angle-down"></i> Price Range
                         </a> 
                              
                         <div class="collapse" id="collapseExample3" style="padding:5px">
                              <div class="slidecontainer">
                                   <input type="range" min="300" max="2000" value="50" class="slider" id="myRange">
                                   <p>Max Price: <span id="demo"></span></p>
                                 </div>
                                 
                         </div>

               </div>
          
          </div>
      
          <script>
               var slider = document.getElementById("myRange");
               var output = document.getElementById("demo");
               output.innerHTML = slider.value;
               
               slider.oninput = function() {
                 output.innerHTML = this.value;
               }
          </script>
               
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