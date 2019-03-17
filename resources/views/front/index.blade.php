@extends('layouts.master')

@section('content')

<!-- HEADER -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('front/slide0.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carouselTextslide">Bougez avec nous !</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('front/slide2.jpg')}}" alt="Two slide">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="carouselTextslide">Notre prochain Workshop</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('front/slide4.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="carouselTextslide">En Mars</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

  <h2>Evénements</h2>

<article class="evenements">
  <div class="evenement eventExpo">
    <img src="{{asset('front/logoExpoVecteur.svg')}}" href="works.html">
    <img src="{{asset('front/imgExpo.jpg')}}" href="works.html">
    <img src="{{asset('front/txtTeamLabVecteur.svg')}}" href="works.html">
  </div>
  <div class="evenement eventWorkshop">
    <img src="{{asset('front/logoWorkshopVecteur.svg')}}" href="works.html">
    <img src="{{asset('front/imgWorkshop.jpg')}}" href="works.html">
    <img src="{{asset('front/txtRisographieVecteur.svg')}}" href="works.html">
  </div>
</article>
<article class="evenements">
  <div class="evenement eventExcursion">
      <img src="{{asset('front/logoExcursionVecteur.svg')}}" href="works.html">
      <img src="{{asset('front/imgExpo.jpg')}}" href="works.html">
      <img src="{{asset('front/txtAlvarAlto.svg')}}" href="works.html">
  </div>
  <div class="evenement eventEvent">
      <img src="{{asset('front/logoEvent.Vecteursvg.svg')}}" href="works.html">
      <img src="{{asset('front/imgWorkshop.jpg')}}" href="works.html">
      <img src="{{asset('front/txtEnMars.svg')}}" href="works.html">
  </div>
</article>
<!-- 		
<section class="sectionEvenements">
<h2>Evénements</h2>
<article class="evenements">
    <div class="logoExpo">
       <img src="{{asset('front/logoExpoVecteur.svg')}}" href="works.html">
       <img src="{{asset('front/imgExpo.jpg')}}" href="works.html">
       <img src="{{asset('front/txtTeamLabVecteur.svg')}}" href="works.html">
    </div>
      <div class="logoExpo">
        <img src="{{asset('front/logoWorkshopVecteur.svg')}}" href="works.html">
        <img src="{{asset('front/imgWorkshop.jpg')}}" href="works.html">
        <img src="{{asset('front/txtRisographieVecteur.svg')}}" href="works.html">
    </div>
</article>
<article class="evenements 2">
    <div class="logoExpo">
       <img src="{{asset('front/logoExcursionVecteur.svg')}}" href="works.html">
       <img src="{{asset('front/imgExpo.jpg')}}" href="works.html">
       <img src="{{asset('front/txtAlvarAlto.svg')}}" href="works.html">
    </div>
<div class="logoExpo 2">
        <img src="{{asset('front/logoEvent.Vecteursvg.svg')}}" href="works.html">
       <img src="{{asset('front/imgWorkshop.jpg')}}" href="works.html">
       <img src="{{asset('front/txtRisographieVecteur.svg')}}" href="works.html">
</div>
</article>
</section> -->

<section class="sectionPartenaires">
<h2>Partenaires</h2>

<div class="card-carousel">
  @foreach ($partners as $partner)
    <div class="my-card"><img src="{{asset('images/'.$partner->picturePartner->url_img_partners)}}" alt="{{$partner->picturePartner->titre}}">
    <p>{{$partner->nom}}</p>
      <a href="https://www.google.fr"><p>{{$partner->description}}</p></a>
    </div>
  @endforeach
</div>

</section>

<section class="sectionInsta">
<h2>Suivez-nous</h2>
<div class="container">
<div id="instafeed"></div>
  <div id="load-more">En voir +</div>
  </div>
</section>

@endsection

@section('scripts')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="{{asset('js/carousel-bootstrap.js')}}"></script>
<script src="{{asset('js/instagram.js')}}"></script>
<script src="{{asset('js/carousel-partenaire.js')}}"></script>
@endsection