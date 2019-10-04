@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="EventController@store" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type" id="type">
                    <option value="1">Movies</option>
                    <option value="2">Concerts</option>
                    <option value="3">Plays</option>
                    <option value="4">Stand Ups</option>
                </select>
            </div>

            <div class="form-group">
                <label for="language">Language:</label>
                <input type="text" class="form-control" id="language" name="language">
            </div>

            <div class="form-group">
                <label for="certi">Certificate:</label>
                <input type="text" class="form-control" id="certi" name="certi">
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" name="genre "id="genre">
            </div>

            <div class="form-group">
                <label for="release_date">Release Date:</label>
                <input type="date" class="form-control" name="release_date "id="release_date">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="0">Expire</option>
                    <option value="1">Current</option>
                    <option value="2">Upcoming</option>
                </select>
            </div>

            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" class="form-control" name="duration "id="duration">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="event_pic">Photo:</label>
                <input type="file" class="form-control-file" name="event_pic "id="event_pic">
            </div>

            <div class="form-group">
                <label for="trailer">Trailer:</label>
                <input type="url" class="form-control" name="trailer" id="trailer">
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
            <form>
    </div>
@endsection

