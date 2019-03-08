@extends('layouts.master')

@section('content')

<!-- HEADER -->
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2 title">OUVREZ LES•YEUX SOYEZ CURIEUX !</h1>
        </div>
      </div>
      <div class="align-items-center">
        <button type="submit" class="btn btn-block btn-lg btn-danger">Devenez membre!</button>
      </div>
    </div>
  </header>
<!-- FIN HEADER -->

<div class="container">
    <div class="row centered mt mb">
      <h1>Les évènements</h1>

      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="{{asset('front/logo_noir.jpg')}}" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="{{asset('front/logo_bleu.jpg')}}" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="{{asset('front/logo_noir.jpg')}}" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="{{asset('front/logo_bleu.jpg')}}" class="img-responsive"></a>
      </div>
    </div>
  </div>

<!-- PARTENAIRES -->

<section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">FLUID A DE BONS COPAINS !</h2>
      
      <div class="row">
      @foreach ($partners as $partner)
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid mb-3" src="{{asset('images/'.$partner->picturePartner->url_img_partners)}}" alt="$partner->picturePartner->titre">
            <h5>{{$partner->nom}}</h5>
            <p class="font-weight-light mb-0">{{$partner->description}}</p>
          </div>
        </div>
        @endforeach
      </div>
      
    </div>
    
  </section>

<!-- FIN PARTENAIRES -->
@endsection


