@extends('layouts.app')

@section('head_extra')
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
               
               {{-- <div class=" p-2 ml-5 mt-5" style="background-color: white;width:70%">
          
                         <a class="btn-design" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <i  class="fa fa-angle-down format-down"> Format</i>
                            <i  class="fa fa-angle-up format-up"> Format</i>
                         </a> 
                              
                         <div class="collapse" id="collapse3" style="padding:5px">
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="1"> 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="2"> 3D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="id in format table"> IMAX 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector format" value="id in format table"> IMAX 3D</label>
                              </div>
                         </div>
               </div> --}}
          
          </div>
      

          <div class="col-md-9">
               <div class="row fetch-data">
                    @include('Events.events')
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
               $.ajax({
                    url:"{{route ('fetch-movies') }}",
                    type:"POST",
                    data:{'_token': '{!! csrf_token() !!}','format':format, 'language':language, 'genre':genre},
                    success:function(data){
                         $('.fetch-data').html(data);
                         // console.log(data);
                    },error:function(e){
                         alert("error!!!!"+e);
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