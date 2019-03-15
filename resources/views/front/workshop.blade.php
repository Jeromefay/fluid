@extends('layouts.event')

@section('content')

<div class="container">
<h1 class="mb-5">Les workshops</h1>

<div class="header-event">
	<div class="event imgWork1">
		<p class="event-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio ad maxime quas non consequuntur quo cumque. Doloremque illum sed dolores, fugit sequi provident assumenda nobis accusantium in architecto cumque id quas beatae officiis, error quisquam rerum praesentium quae quidem iusto voluptatum eveniet adipisci. Sunt consequatur quaerat reprehenderit voluptatem rerum totam!</p>
	</div>
		<div class="event imgWork2"></div>
</div><!-- fin header event --> 

	<h3>Notre prochain événement</h3>

	<div class="row container-last-expo">
    <div class="col-lg-4">
			<a href="{{route('event', $event->id)}}">
				<img class="img-fluid" src="{{asset('front/expo/logoExpo.jpg')}}" alt="">
			</a>
    </div>
    <div class="col-lg-4 paragraph-last-expo font-weight-bold align-self-center text-white">
			{{$event->description}}
		</div>
		<div class="col-lg-4 align-self-center">
		<button type="button" class="btn btn-outline-primary font-weight-bold">Prix membre: {{$event->prix_adherent}}</button><br><br>
		<button type="button" class="btn btn-outline-primary font-weight-bold">Prix non-membre: {{$event->prix}}</button>
		</div>
	</div>

	<h3>Nos événements passés</h3>

	<div class="container">
	<div class="passedEvents">
		@foreach($workshops as $workshop)
		<div class="passedEvent">
			<img class="img-fluid" src="{{asset('images/'.$workshop->pictureEvent->url_img_event)}}" alt="{{asset('images/'.$workshop->pictureEvent->titre)}}">
			<p class="text-white">{{$workshop->description}}</p>
		</div>
		@endforeach
	</div>
</div>


@endsection