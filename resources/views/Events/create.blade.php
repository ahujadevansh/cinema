@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="EventController@store" enctype="multipart/form-data">
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
                <input type="text" class="form-control" id="language" name="language" required>
            </div>

            <div class="form-group">
                <label for="certificate">Certificate:</label> <span style="color:red">*</span>
                <input type="text" class="form-control" id="certificate" name="certificate" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label> <span style="color:red">*</span>
                <input type="text" class="form-control" name="genre" id="genre" required>
            </div>

            <div class="form-group">
                <label for="release_date">Release Date:</label> <span style="color:red">*</span>
                <input type="date" class="form-control" name="release_date "id="release_date" required>
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
                <input type="text" class="form-control" name="duration "id="duration" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label> <span style="color:red">*</span>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="event_pic">Photo:</label> <span style="color:red">*</span>
                <input type="file" class="form-control-file" name="event_pic "id="event_pic" required>
            </div>

            <div class="form-group">
                <label for="trailer">Trailer:</label> <span style="color:red">*</span>
                <input type="url" class="form-control" name="trailer" id="trailer" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
            <form>
    </div>
@endsection

