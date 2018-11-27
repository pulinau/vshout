@extends('layouts.master')

@section('content')
<div class="row">
    <div class="container">
       <section class="tri-column-fluid">
    	<div class="tri-column-outer p-3 clearfix">
            @foreach($events as $event)
            <article class="column carousel-column col-md-3" style="background-image:url(images/background/carousel-bg.jpg);">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">
                	<h3>{{ $event->event_name }}</h3>
                    <div class="text">{{ $event->description }}</div>
                    <div class="text-right link"><a href="{{ route('event.join', $event->id) }}" class="theme-btn btn-style-one">Join Now</a></div>
                </div>
            </article>
            @endforeach

        </div>
    </section> 
    </div>
</div>
@endsection