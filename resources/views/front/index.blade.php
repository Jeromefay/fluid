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
<div class="logoExpo 2 ">
<img src="{{asset('front/logoEvent.Vecteursvg.svg')}}" href="works.html">
       <img src="{{asset('front/imgWorkshop.jpg')}}" href="works.html">
       <img src="{{asset('front/txtRisographieVecteur.svg')}}" href="works.html">
</div>
</article>
</section>

<section class="sectionPartenaires">
<h2>Partenaires</h2>

<div class="card-carousel">
  @foreach ($partners as $partner)
    <div class="my-card"><img src="{{asset('images/'.$partner->picturePartner->url_img_partners)}}" alt="$partner->picturePartner->titre">
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



  


<!-- FIN PARTENAIRES -->
@endsection

<!-- pour API INstagram -->
@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
  <script>$('.carousel').carousel()</script>
  <script>
$num = $('.my-card').length;
$even = $num / 2;
$odd = ($num + 1) / 2;

if ($num % 2 == 0) {
  $('.my-card:nth-child(' + $even + ')').addClass('active');
  $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $even + ')').next().addClass('next');
} else {
  $('.my-card:nth-child(' + $odd + ')').addClass('active');
  $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
}

$('.my-card').click(function() {
  $slide = $('.active').width();
  console.log($('.active').position().left);
  
  if ($(this).hasClass('next')) {
    $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
  } else if ($(this).hasClass('prev')) {
    $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
  }
  
  $(this).removeClass('prev next');
  $(this).siblings().removeClass('prev active next');
  
  $(this).addClass('active');
  $(this).prev().addClass('prev');
  $(this).next().addClass('next');
});


// Keyboard nav
$('html body').keydown(function(e) {
  if (e.keyCode == 37) { // left
    $('.active').prev().trigger('click');
  }
  else if (e.keyCode == 39) { // right
    $('.active').next().trigger('click');
  }
});
</script>

<script type="text/javascript">


    var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
        get: 'user',
        userId: '7983810479',
        accessToken: '7983810479.1677ed0.aaadb05b044548f48aed1794e16533ca',
        limit: 14,
        // every time we load more, run this function
        after: function() {
            // disable button if no more results to load
            if (!this.hasNext()) {
            loadButton.setAttribute('disabled', 'disabled');
            }
        },
        });

        // bind the load more button
        loadButton.addEventListener('click', function() {
        feed.next();
        });

        // run our feed!
        feed.run();
        </script>
<!-- pour  API INstagram afin d'optimisé-->
@endsection