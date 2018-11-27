@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">{{$event->event_name}}</h3>
              <h4>Max Volunteers : {{$event->max_volunteers}}</h4>
              <h4>Registered Volunteers : {{$event->curr_volunteers}}</h4>
              <p class="card-text">{{$event->description}}</p>
            </div>
          </div>

          <br>
          <!-- /.card -->
          @include('feedbacks.view')
          <a href="{{route('feedbacks.create', $event->id)}}" class="btn btn-success">Leave a Review</a>

          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
@endsection
