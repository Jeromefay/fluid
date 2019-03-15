@extends('layouts.event')

@section('content')
<div class="container">
<h1>{{$event->titre}}</h1>
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('images/'.$event->pictureEvent->url_img_event) }}" alt="{{$event->pictureEvent->titre}}">
        </div>
        <div class="col-7">
            <p>{{$event->description}}</p>
            <button type="button" class="btn btn-outline-primary font-weight-bold">Prix membre: {{$event->prix_adherent}} €</button>
            <button type="button" class="btn btn-outline-primary font-weight-bold">Prix non-membre: {{$event->prix}} €</button>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-body">
            <iframe style="width:100%;height:750px;border:none;" id="haWidget" allowtransparency="true" scrolling="no" src="{{$event->lien_evenement}}"></iframe>Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a>
        </div>
    </div>
</div>

@endsection