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

<section class="sectionPartenaires">
<h2>Partenaires</h2>
<!-- SECTION PARTENAIRE -->
<div uk-slider="center: true">

    <div class="widthPartenaires uk-position-relative uk-visible-toggle uk-light container" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
          @foreach ($partners as $partner)
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="imgPartenaires"  src="{{asset('images/'.$partner->picturePartner->url_img_partners)}}">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">{{$partner->nom}}</h3>
                        <p>{{$partner->description}}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

<!-- FIN PARTENAIRE -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="{{asset('js/uikit.min.js')}}"></script>
<script src="{{asset('js/uikit-icons.min.js')}}"></script>
<script src="{{asset('js/carousel-bootstrap.js')}}"></script>
<script src="{{asset('js/instagram.js')}}"></script>
@endsection