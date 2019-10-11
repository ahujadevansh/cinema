@extends('layouts.app')

@section('head_extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'ShowController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
            <div class="form-group">
                <label for="time">Time:</label> <span style="color:red">*</span>
                <input type="text" name="time" class="form-control" id="time" required>
            </div>

            <div class="form-group">
                <label for="format">Venue:</label> <span style="color:red">*</span>
                <select class="form-control selectpicker" name="venue" id="venue" required>
                    @if(count($venues) > 0)    
                        @foreach($venues as $venue)
                            <option value="{{$venue->id}}">{{$venue->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="format">Event:</label> <span style="color:red">*</span>
                <select class="form-control selectpicker" name="event" id="event" required>
                    @if(count($events) > 0)    
                        @foreach($events as $event)
                            <option value="{{$event->id}}">{{$event->name}}</option>
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