@if(count($events) > 0)
    @foreach($events as $event)
    <div class="col-md-4">
        <div class="card p-1 ml-3 mt-5 mr-1">
            <img class="card-img-top" src="/storage/images/event_pics/{{$event->event_pic}}" alt="{{$event->event_pic}}" height="400px">
            <div class="card-body">
            <a href="/events/{{ $event->id }}" style="text-decoration:none" class="stretched-link"><h4 class="card-title">{{ $event->name }}</h4></a>
            </div>
        </div>
    </div>
    @endforeach
    
@else
    <p>No events found</p>
@endif
