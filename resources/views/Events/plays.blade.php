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
          </div>
          <div class="col-md-9">
                    <div class="row fetch-data">
                         @include('Events.events')
                    </div>     
               </div>  
     </div>
                         
                              {{-- <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector Date" value="id in Date table"> IMAX 2D</label>
                              </div>
                              <div class="checkbox">
                                   <label><input type="checkbox" class="common-selector Date" value="id in Date table"> IMAX 3D</label>
                              </div> --}}
                        
   
      

          
@endsection

@section('script_extra')
    <script>
        $(document).ready(function(){
          $(".language-down").hide();
          // $(".genre-up").hide();
          // $(".Date-up").hide();

          // $(".genre-up").click(function(){
          //      $(".genre-up").hide();
          //      $(".genre-down").show();
          // });
          // $(".genre-down").click(function(){
          //      $(".genre-up").show();
          //      $(".genre-down").hide();
          // });
          
          $(".language-up").click(function(){
               $(".language-up").hide();
               $(".language-down").show();
          });
          $(".language-down").click(function(){
               $(".language-up").show();
               $(".language-down").hide();
          });

          // $(".Date-up").click(function(){
          //      $(".Date-up").hide();
          //      $(".Date-down").show();
          // });
          // $(".Date-down").click(function(){
          //      $(".Date-up").show();
          //      $(".Date-down").hide();
          // });

          function filter_data(){

               var language = get_filter('language');
               // var genre = get_filter('genre');
               // // var Date = get_filter('Date');
               $.ajax({
                    url:"{{route ('fetch-plays') }}",
                    type:"POST",
                    data:{'_token': '{!! csrf_token() !!}','language':language},
                    success:function(data){
                         $('.fetch-data').html(data);
                         console.log(data);
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