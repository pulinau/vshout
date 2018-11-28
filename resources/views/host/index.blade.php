@extends('layouts.master')

@section('content')
<div class="container emp-profile" style="padding:3em;">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img" style="margin-bottom:3em;">
                    <img id="showProfile" style="margin-right:auto; margin-left:auto;" 
                        class="img-responsive" 
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" 
                        alt=""/>
                        <span style="margin-bottom:3em;diaplay:innline-block;">
                            <label for="file" class="mt-3">Choose a file</label>
                            <input type="file" name="img" id="profilePic" accept="image/*" class="inputfile" style="display:inline">
                        </span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-8">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-4">
                                <p>{{Auth::user()->id}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>Name</label>
                            </div>
                            <div class="col-md-4">
                                <p>{{Auth::user()->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>Email</label>
                            </div>
                            <div class="col-md-4">
                                <p>{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3 style="color:#f06626;text-transform:uppercase;letter-spacing:3px;padding-top:1em;padding-bottom:1em;"> My Events </h3>
                <a href="/events/create" class="btn btn-success">Create Event</a>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                @foreach(auth()->user()->events as $event)
                                <div class="card" >
                                    <img class="card-img-top" src="https://via.placeholder.com/800x200" alt="Card image cap">
                                    <div class="card-body">
                                        <span style="font-size:1.2em;text-transform:uppercase" 
                                            class="text-bold card-title">{{$event->event_name}}</span>
                                        @
                                        <span class="card-text text-right">{{$event->event_date}}</span>
                                        <p class="card-text">{{$event->description}}</p>
                                        <a href="{{route('events.show',[$event->id])}}" class="btn btn-primary">View Event</a>
                                        <a href="{{route('events.edit',[$event->id])}}" class="btn btn-warning">Edit Event</a>
                                        {{-- <a href="{{route('events.destroy',[$event->id])}}" class="btn btn-danger">Delete Event</a> --}}
                                        <form action="{{ route('events.destroy', $event->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </form>
</div>
@endsection

@push('scripts')
<script src="/js/uploadProfile.js"></script>
@endpush

@push('style')
<style>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
</die
@endpush