<div class="card card-outline-secondary my-4">
  <div class="card-header">
    Event Reviews
  </div>
  <div class="card-body">
    @foreach($event->feedbacks as $feedback)
    <p>{{$feedback->description}}</p>
    <small class="text-muted">Posted by {{$feedback->name}} on {{$feedback->created_at}}</small>
    <hr>
    @endforeach
  </div>
</div>
