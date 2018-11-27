@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Event
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('events.update', $event->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="event">Event name:</label>
          <input type="text" class="form-control" name="event_name" value="{{ $event->event_name }}"/>
        </div>
        <div class="form-group">
          <label for="date">Event date:</label>
          <input type="date" class="form-control" name="event_date" value="{{ $event->event_date }}"/>
        </div>
        <div class="form-group">
          <label for="max">Max Volunteers:</label>
          <input type="text" class="form-control" name="max_volunteers" value="{{ $event->max_volunteers }}"/>
        </div>
        <div class="form-group">
          <label for="desc">Description:</label>
          <textarea class="form-control" name="description" placeholder="Enter description here...">{{ $event->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/events') }}" class="btn btn-danger">Cancel</a>
      </form>
  </div>
</div>
@endsection