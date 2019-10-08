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
                         <div class="checkbox">
                              <label><input type="checkbox">Hindi</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox">English</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox">Tamil</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox">Sindhi</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox">Marathi</label>
                         </div>
                    </div>
               </div>
              
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample">
                                   <i  class="fa fa-angle-down"></i> Genre
                         </a> 
                    
                         <div class="collapse" id="collapseExample2" style="padding:5px">
                              <div class="checkbox">
                                   <label><input type="checkbox">Romantic</label>
                              </div>
                                   <div class="checkbox">
                                   <label><input type="checkbox">Action</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Adventure</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Horror</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Thriller</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Animated</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Comedy</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">Biography</label>
                              </div>
                         </div>
               
               </div>
               
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="true" aria-controls="collapseExample">
                                             <i  class="fa fa-angle-down"></i> Format
                         </a> 
                              
                         <div class="collapse" id="collapseExample3" style="padding:5px">
                              <div class="checkbox">
                                   <label><input type="checkbox">2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">3D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">IMAX 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox">IMAX 3D</label>
                              </div>
                         </div>
               </div>
          
          </div>
      

          <div class="col-md-9 ">
               <div class="row">
                         <div class="card p-2 ml-3 mt-5 col-md-3" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5 col-md-3" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5 col-md-3" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5 col-md-3" style="width: 18rem;">
                                   <img src="images/colour.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                     <h5 class="card-title">Card title</h5>
                                     <p class="card-text"> </p>
                                     <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                         </div>

                         <div class="card p-2 ml-3 mt-5 col-md-3" style="width: 18rem;">
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