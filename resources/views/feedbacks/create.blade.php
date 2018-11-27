@extends('layouts.modal')
@section('content')

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Review </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{route('feedbacks.store',$event->id)}}" method="post">
                  @csrf
                <div class="row">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                <div class="form-group">
                                    <label for="name">
                                        Review</label>
                                    <textarea name="description" id="description" class="form-control" rows="9" cols="25" required="required"
                                        placeholder=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" id="submit">
                                    Post Review</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
