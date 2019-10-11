@extends('layouts.app')

@section('head_extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'EventController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
            <div class="form-group">
                <label for="name">Name:</label> <span style="color:red">*</span>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="type">Type:</label> <span style="color:red">*</span>
                <select class="form-control" name="type" id="type" required>
                    <option value="1">Movies</option>
                    <option value="2">Concerts</option>
                    <option value="3">Plays</option>
                    <option value="4">Stand Ups</option>
                </select>
            </div>

            <div class="form-group">
                <label for="language">Language:</label> <span style="color:red">*</span>
                <select class="form-control" name="language" id="language" required>
                    <option value="Hindi">Hindi</option>
                    <option value="Sindhi">Sindhi</option>
                    <option value="Tamil">Marathi</option>
                    <option value="Marathi">Tamil</option>
                    <option value="English">English</option>
                </select>
            </div>

            <div class="form-group">
                <label for="certificate">Certificate:</label> <span style="color:red">*</span>
                <select class="form-control" name="certificate" id="certificate" required>
                    <option value="UA">UA</option>
                    <option value="A">A</option>
                </select>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label> <span style="color:red">*</span>
                <select class="form-control" name="genre" id="genre" required>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Biography">Biography</option>
                    <option value="Animated">Animated</option>
                </select>
            </div>

            <div class="form-group">
                <label for="format">Format:</label> <span style="color:red">*</span>
                <select class="form-control selectpicker" name="format[]" id="format" required multiple>
                    @if(count($formats) > 0)    
                        @foreach($formats as $format)
                            <option value="{{$format->id}}">{{$format->format}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="artist">Artists</label> <span style="color:red">*</span>
                <select name="artist[]" id="artist" class="form-control selectpicker" data-live-search="true" required multiple>
                    @if(count($artists) > 0)    
                        @foreach($artists as $artist)
                            <option value="{{$artist->id}}">{{$artist->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="release_date">Release Date:</label> <span style="color:red">*</span>
                <input type="date" class="form-control" name="release_date" id="release_date" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label> <span style="color:red">*</span>
                <select class="form-control" name="status" id="status" required>
                    <option value="0">Expire</option>
                    <option value="1">Current</option>
                    <option value="2">Upcoming</option>
                </select>
            </div>

            <div class="form-group">
                <label for="duration">Duration:</label> <span style="color:red">*</span>
                <input type="text" class="form-control" name="duration" id="duration" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label> <span style="color:red">*</span>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="event_pic">Photo:</label> <span style="color:red">*</span>
                {{-- <input type="file" class="form-control-file" name="event_pic "id="event_pic" required> --}}
                <input type="file" class="form-control-file" name="event_pic" id="event_pic">
            </div>

            <div class="form-group">
                <label for="trailer">Trailer:</label>
                <input type="url" class="form-control" name="trailer" id="trailer">
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