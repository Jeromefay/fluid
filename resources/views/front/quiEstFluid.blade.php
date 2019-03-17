@extends('layouts.master')

@section('content')
<div class="container">
<h1>Le collectif</h1>

<div class="header-event">
        <div class="event imgExpo1">
	        <p class="event-paragraph">
            FLUID est un collectif curieux qui cherchent à assouvir les envies
            de culture, les soif de pratiques artistiques, et le besoin de rencontres professionnelles de ses membres... Ou non membres.
            Pour ce faire, il propose... des billets d'expos à tarif groupe avec conférencier ou non, des workshop en petit comité sur des pratiques créatives, des excursions culturelles sur deux jours, des soirées pour se rencontrer et partager de bons moments !
                </p>
	</div>
        <div class="event imgExpo2">
        </div>
</div>
</div><!-- fin header --> 
<p class="text-center mt-5">
        <a href="{{ route('register') }}">
                <button type="button" class="btn btn-primary btn-lg ">Rejoins le collectif Fluid</button>
        </a>
</p>
@endsection