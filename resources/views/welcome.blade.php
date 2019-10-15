@extends('layouts.app')

@section('content')
    @include('inc.carousel')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row fetch-data">
                @include('Events.events')
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
