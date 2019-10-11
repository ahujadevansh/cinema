@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center mt-5">
            {!! Form::open(['action' => 'ArtistController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
                <div class="form-group">
                    <label for="name">Artist name:</label> <span style="color:red">*</span>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="form-group">
                    <label for="event_pic">Artist photo:</label> <span style="color:red">*</span>
                    <input type="file" class="form-control-file" name="artist_pic" id="artist_pic" required>
                </div>

                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                <input type="submit" class="btn btn-primary" value="Submit">
            {!! Form::close() !!}
        </div>
    </div>
@endsection