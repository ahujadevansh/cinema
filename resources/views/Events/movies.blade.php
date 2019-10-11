@extends('layouts.app')

@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/filter.css') }}">

     <link rel="stylesheet" href="{{ asset('css/card.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
     @include('inc.carousel') 
     <div class="row">
          <div class="col-md-3">
               <div class=" p-2 ml-5 mt-5" style="background-color:white; width:70%">
               
                     
                    <a class="btn-design" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        <i class="fa fa-angle-down language-down"> Language</i> 
                        <i class="fa fa-angle-up language-up"> Language</i>
                    </a> 
          
                    <div class="collapse show" id="collapse1" style="padding:5px">
                         <div class="checkbox">
                              <label><input type="checkbox" class="common-selector language" value="Hindi" > Hindi</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox" class="common-selector language" value="English"> English</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox" class="common-selector language" value="Tamil"> Tamil</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox" class="common-selector language" value="Sindhi"> Sindhi</label>
                         </div>
                         <div class="checkbox">
                              <label><input type="checkbox" class="common-selector language" value="Marathi"> Marathi</label>
                         </div>
                    </div>
               </div>
              
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                   <i  class="fa fa-angle-down genre-down"> Genre</i>
                                   <i  class="fa fa-angle-up genre-up"> Genre</i> 
                         </a> 
                    
                         <div class="collapse" id="collapse2" style="padding:5px">
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Romantic"> Romantic</label>
                              </div>
                                   <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Action"> Action</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Adventure"> Adventure</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Horror"> Horror</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Thriller"> Thriller</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Animated"> Animated</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Comedy"> Comedy</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector genre" value="Biography"> Biography</label>
                              </div>
                         </div>
               
               </div>
               
               <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <i  class="fa fa-angle-down format-down"> Format</i>
                            <i  class="fa fa-angle-up format-up"> Format</i>
                         </a> 
                              
                         <div class="collapse" id="collapse3" style="padding:5px">
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="2D"> 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="3D"> 3D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="IMAX 2D"> IMAX 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="IMAX 3D"> IMAX 3D</label>
                              </div>
                         </div>
               </div>
          
          </div>
      

          <div class="col-md-9 ">
               <div class="row">
                    @if(count($events) > 0)
                         @foreach($events as $event)
                              <div style=" max-height: 400px!important;border-radius: 5px!important;">
                                   <a href="google.com">
                                        <div class="image" style="background-image:linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.4)),url(/storage/images/event_pics/{{$event->event_pic}});border-top-left-radius: 5px!important;border-top-right-radius: 5px!important;"></div>
                                        {{-- <img style="height:400px;width:300px" src="/storage/images/event_pics/{{$event->event_pic}}" alt="{{$event->event_pic}}"> --}}
                                   </a>
                                   <div class="card-desc">
                                        <h3>Heading</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                             voluptas totam</p>
                                             {{-- <a href="#" class="btn-card">Read</a>    --}}
                                   </div>
                              </div>
                         @endforeach
                         {{-- {{$posts->links()}} --}}
                     @else
                         <p>No events found</p>
                     @endif
                    <div class="col-md-4">
                        <div class="card-content p-1 ml-3 mt-5 mr-1">
                            <a href="google.com" class="card-img">
                                <img src="https://placeimg.com/380/230/nature" alt="">
                               
                            </a>
                            <div class="card-desc">
                                <h3>Heading</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                    {{-- <a href="#" class="btn-card">Read</a>    --}}
                            </div>
                         </div>
                    </div>
                    

                    <div class="col-md-4">
                        <div class="card-content p-1 ml-3 mt-5 mr-1">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/animals" alt="">
                               
                            </div>
                            <div class="card-desc">
                                <h3>Heading2</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                    <a href="#" class="btn-card">Read</a>   
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card-content p-1 ml-3 mt-5 mr-1">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/tech" alt="">
                               
                            </div>
                            <div class="card-desc">
                                <h3>Heading3</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                    <a href="#" class="btn-card">Read</a>   
                            </div>
                        </div>
                    </div>
               </div>     
          </div>  
     </div>
@endsection

@section('script_extra')
    <script>
        $(document).ready(function(){
            $(".language-down").hide();
            $(".genre-up").hide();
            $(".format-up").hide();

            $(".language-up").click(function(){
                $(".language-up").hide();
                $(".language-down").show();
            });
            $(".language-down").click(function(){
                $(".language-up").show();
                $(".language-down").hide();
            });
            
            $(".genre-up").click(function(){
                $(".genre-up").hide();
                $(".genre-down").show();
            });
            $(".genre-down").click(function(){
                $(".genre-up").show();
                $(".genre-down").hide();
            });

            $(".format-up").click(function(){
                $(".format-up").hide();
                $(".format-down").show();
            });
            $(".format-down").click(function(){
                $(".format-up").show();
                $(".format-down").hide();
            });

          function filter_data(){

               var language = get_filter('language');
               var genre = get_filter('genre');
               var format = get_filter('format');

               $.post({
                    url:"",
                    data:{'format':format, 'language':language, 'genre':genre},
                    success:function(data){
                         $('.fetch-data').html(data);
                    }
                    });
               }

               function get_filter(class_name){
               var filter = [];
               $('.' + class_name + ':checked').each(function(){
               filter.push($(this).val());
               });
               return filter;
               }

               $('.common-selector').click(function(){
               filter_data();
               });

        });
    </script>
@endsection