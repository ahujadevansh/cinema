@extends('layouts.app')

@section('head_extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'VenueController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
            <div class="form-group">
                <label for="name">Name:</label> <span style="color:red">*</span>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="format">Organiser:</label> <span style="color:red">*</span>
                <select class="form-control selectpicker" name="organiser" id="organiser" required>
                    @if(count($organisers) > 0)    
                        @foreach($organisers as $organiser)
                            <option value="{{$organiser->id}}">{{$organiser->first_name}} {{$organiser->last_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            {{-- <input type="hidden" name="_method" value="PUT"> --}}
            <input type="submit" class="btn btn-primary" value="Submit">
        {!! Form::close() !!}
    </div>
@endsection

@section('script_extra')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    
    <script>
        $.fn.selectpicker.Constructor.BootstrapVersion = '4';

        $(document).ready(function(){
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection