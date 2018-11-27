@extends('layouts.app')

@section('content')
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Events</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="row">
                          <div class="col-md-4">
                              <label>User Id</label>
                          </div>
                          <div class="col-md-4">
                              <p>{{Auth::user()->id}}</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <label>Name</label>
                          </div>
                          <div class="col-md-4">
                              <p>{{Auth::user()->name}}</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <label>Email</label>
                          </div>
                          <div class="col-md-4">
                              <p>{{Auth::user()->email}}</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row">
                              <div class="col-sm-6">
                              @foreach(auth()->user()->events as $event)
                              <div class="card" >
                                <img class="card-img-top" src="https://via.placeholder.com/800x200" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">{{$event->event_name}}</h5>
                                  <h6 class="card-text">{{$event->event_date}}</h6>
                                  <p class="card-text">{{$event->description}}</p>
                                  <a href="{{route('events.show',[$event->id])}}" class="btn btn-primary">View Event</a>
                                  <a href="{{route('events.edit',[$event->id])}}" class="btn btn-warning">Edit Event</a>
                                  <a href="{{route('events.destroy',[$event->id])}}" class="btn btn-danger">Delete Event</a>
                                </div>
                              </div>
                              <br>
                              @endforeach
                          </div>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection
