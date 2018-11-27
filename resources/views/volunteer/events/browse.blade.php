@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  @if(session()->get('warning'))
    <div class="alert alert-warning">
      {{ session()->get('warning') }}  
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
          <td></td>
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
            <td>
                <form action="/events/{{ $event->id }}/register" method="post">
                  @csrf
                    <button class="btn btn-success" type="submit">Register</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="row">
    <a href="{{ route('events.create') }}" class="btn btn-primary">Add event</a>
  </div>
<div>
@endsection