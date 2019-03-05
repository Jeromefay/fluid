@extends('layouts.master')

@section('content')



<section id="fh5co-work" data-section="work" class="animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate fadeInUp animated">Expositions</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate fadeInUp animated">
						<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="row row-bottom-padded-sm">
			@foreach($events as $event)
			<div class="col-md-4 col-sm-6 col-xxs-12">
				<a href="images/work_1.jpg" class="fh5co-project-item image-popup to-animate fadeInUp animated">
					<img src="{{asset('images/'.$event->pictureEvent->url_img_event)}}" alt="$event->pictureEvent->titre"
						class="img-responsive">
					<div class="fh5co-text">
						<h2>{{$event->titre}}</h2>
				</a>
				<p>{{$event->description}}</p>
			</div>
		</div>
		@endforeach
	</div>
</section>


<!-- Excursions -->


<section id="fh5co-work" data-section="work" class="animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate fadeInUp animated">Excursions</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate fadeInUp animated">
						<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="row row-bottom-padded-sm">
			@foreach($expos as $expo)
			<div class="col-md-4 col-sm-6 col-xxs-12">
				<a href="images/work_1.jpg" class="fh5co-project-item image-popup to-animate fadeInUp animated">
					<img src="{{asset('images/'.$event->pictureEvent->url_img_event)}}" alt="$event->pictureEvent->titre"
						class="img-responsive">
					<div class="fh5co-text">
						<h2>{{$expo->titre}}</h2>
				</a>
				<p>{{$expo->description}}</p>
			</div>
		</div>
		@endforeach
	</div>
</section>

@endsection