@extends('layouts.master')


@section('content')



<div class="container pp-section">
  <div class="row">
    <div class="col-md-9 col-sm-12 px-0">
      <h1 class="h3"> Bienvenue dans l'espace membre</h1>
    </div>
  </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="header-event mb-5">
	        <div class="event imgExpo1">
		        <p class="event-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio ad maxime quas non consequuntur quo cumque. Doloremque illum sed dolores, fugit sequi provident assumenda nobis accusantium in architecto cumque id quas beatae officiis, error quisquam rerum praesentium quae quidem iusto voluptatum eveniet adipisci. Sunt consequatur quaerat reprehenderit voluptatem rerum totam!
                </p>
	        </div>
        <div class="event imgExpo2"></div>
    </div>
        <!-- FIN HEADER -->

<nav class="navbar navbar-white bg-white">
    <div class="col-sm-7 col-lg-5">
    <input class="col-sm-7" type="text" placeholder="Chercher par compétence" aria-label="Search" name="search" id="search" width="300px">
    <input type="submit" class="btn btn-primary">
    </div>
    <a href="">⭐ Afficher mes favoris</a>
</nav>
<section id="team" class="pb-5">
    
        <h5 class="section-title h1">Nos membres</h5>
        <div class="row">
            <!-- Carte membre -->
            @foreach($users as $user)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="cardMembre">
                                        @if($user->dispo == 'oui')
                                        <label class="switch">
                                            <input type="checkbox" checked disabled>
                                            <span class="sliderMembre round"></span>
                                        </label>
                                        @else
                                        <label class="switch">
                                            <input type="checkbox" disabled>
                                            <span class="sliderMembre round"></span>
                                        </label>
                                        @endif
                                        <p>⭐</p>
                                    </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolorem.</p>
                                    <p><img class=" img-fluid" src="{{asset('images/'.$user->url_img_user)}}" alt="card image"></p>
                                    <h4 class="card-title"> {{$user->nom}}</h4>
                                    <p class="card-text">{{$user->competence_1}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="far fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      @endforeach
            <!-- FIN carte membre -->
        </div>
    
</div>
</section>
{{$users->links()}}


@endsection

@section('scripts')
    @parent
    <script src="{{asset('js/membre.js')}}"></script>
@endsection