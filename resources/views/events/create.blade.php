@extends('layouts.app')
@section('content')
<div class="container">
  <form>
    <div class="form-group">
      <label for="event_title">Event Title</label>
      <input type="text" class="form-control" id="event_title" placeholder="">
    </div>
    <div class="form-group">
      <label for="date">Example select</label>
      <input type="date" name="date">
    </div>
    <div class="form-group">
      <label for="description">Event Description</label>
      <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
    <input type="submit" value="create event">
  </form>
</div>
@endsection
