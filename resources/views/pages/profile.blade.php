@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="justify-content-center">
        {{-- <div class="media border rounded shadow p-3 m-2">
            <img class="img-thumbnail rounded-circle img-fluid" style="height:125px;width:125px" src="{{ user.profile.profile_pic.url }}" alt="user profile pic">
            <div class="media-body p-4">
                <h2>{{user.first_name|title}} {{user.last_name|title}}</h2>
                <p>{{ user.username }}</p>
            </div>
        </div> --}}
        {!! Form::open(['action' => 'EventController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
            <div class="form-group">
                <label for="first_name">First Name:</label> <span style="color:red">*</span>
                <input type="text" name="first_name" class="form-control" id="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label> <span style="color:red">*</span>
                <input type="text" name="last_name" class="form-control" id="last_name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label> <span style="color:red">*</span>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label> <span style="color:red">*</span>
                <select class="form-control" name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Birth Date:</label> <span style="color:red">*</span>
                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label> <span style="color:red">*</span>
                <input type="text" name="phone" class="form-control" id="phone" required>
            </div>

            <div class="form-group">
                <label for="profile_image">Profile Photo:</label> <span style="color:red">*</span>
                <input type="file" class="form-control-file" name="profile_image" id="profile_image">
            </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection
