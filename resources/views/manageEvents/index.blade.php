@extends('layouts.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<!-- <div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Event Name</td>
          <td>Event Date</td>
          <td>Description</td>
          <td>Max Volunteers</td>
          <td>Registered Volunteers</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_date}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->max_volunteers}}</td>
            <td>{{$event->curr_volunteers}}</td>
            <td><a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('events.destroy', $event->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table> -->

  <section class="jumbotron text-center">
          <div class="container">
            <h1 class="jumbotron-heading">Events Happening on VShout</h1>
            <p class="lead text-muted">Join with ongoing Volunteering events</p>
            <p>
              <!-- Button for creating new Events for Hosts -->
              <a href="{{ route('events.create') }}" class="btn btn-primary">Add event</a>

            </p>
          </div>
        </section>

  <div class="row">

  </div>
<div>

  <div class="album py-5 bg-light">
          <div class="container">

            <div class="row">

                @foreach($events as $event)
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" data-src="https://via.placeholder.com/100x225" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{$event->event_name}}</h4>
                    <p class="card-text">Max Volunteers : {{$event->max_volunteers}}</p>
                    <p class="card-text">Current Volunteers : {{$event->curr_volunteers}}</p>
                    <p class="card-text">Date : {{$event->event_date}}</p>
                    <p class="card-text">{{substr($event->description,0,100)}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" href="{{ route('events.show',$event->id)}}" class="btn btn-primary btn-sm btn-outline-secondary">View</button>
                        <!-- Button for enrolling volunteers -->
                        <button type="button" class="btn btn-primary btn-sm btn-outline-secondary">Join Event</button>
                      </div>
                      <small class="text-muted">{{$event->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
@endsection
