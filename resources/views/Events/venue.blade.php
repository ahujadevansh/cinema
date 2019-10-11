@extends('layouts.app')
@section('head_extra')
     <link rel="stylesheet" href="{{ asset('css/venue.css') }}">
     <script type="text/javascript" src="js/disable.js"></script>
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div>
  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Rbp2XUSeUNE" frameborder="0" allow=" autoplay;  gyroscope; picture-in-picture" ></iframe>
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
                <table class="table table1">
                        <thead>
                          <tr>
                            <th scope="col">Theater</th>
                            <th scope="col">Shows</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td><a href="#" class="btn btn-outline-primary">9.20pm </a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">9.20pm </a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">9.20pm </a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">9.20pm </a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

                            </td>
                        </tr>

                          <tr>
                            <th scope="row">2</th>
                            <td><a href="#" class="btn btn-outline-primary">1</a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">2</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">3</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">4</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

</td>
                            </tr>

                          <tr>
                            <th scope="row">3</th>
                            <td><a href="#" class="btn btn-outline-primary">1</a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">2</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">3</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                              <a href="#" class="btn btn-outline-primary">4</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

</td>
                            </tr>

                            <tr>
                                    <th scope="row">1</th>
                                    <td><a href="#" class="btn btn-outline-primary">1</a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">2</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">3</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">4</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
        
        </td>
                                </tr>
        
                                  <tr>
                                    <th scope="row">2</th>
                                    <td><a href="#" class="btn btn-outline-primary">1</a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">2</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">3</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">4</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
        
        </td>
                                    </tr>
        
                                  <tr>
                                    <th scope="row">3</th>
                                    <td><a href="#" class="btn btn-outline-primary">1</a> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">2</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">3</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                      <a href="#" class="btn btn-outline-primary">4</a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                </td>
                                    </tr>

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
