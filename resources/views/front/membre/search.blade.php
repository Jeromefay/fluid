@extends('layouts.master')


@section('content')


<div class="page-content">
        <div class="container">
<div class="container pp-section">
  <div class="row">
    <div class="col-md-9 col-sm-12 px-0">
      <h1 class="h3"> Bienvenue dans l'espace membre</h1>
    </div>
  </div>
</div>
<nav class="navbar navbar-white bg-white">
    <input class="col-sm-4 " type="text" placeholder="Chercher par compétence" aria-label="Search" name="q" id="search">
    <button type="submit" class="btn btn-default"></button>
    <a href="">⭐ Afficher mes favoris</a>
</nav>


<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Nos membres</h5>
        <div class="row">
            <!-- Team member -->
            
            
            
            
            @foreach($users as $user)
           
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <style>
                                .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
                                .toggle.ios .toggle-handle { border-radius: 20px; }
                                </style>
                                 
                                <span>⭐</span>
                                    <p><img class=" img-fluid" src="{{asset('images/'.$user->url_img_user)}}" alt="card image"></p>
                                    <h4 class="card-title"> {{$user->nom}}</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    @if($user->dispo == 'oui')
                                <input class="toggle_membre" type="checkbox" data-toggle="toggle" data-style="ios" data-on="dispo 😀" checked disabled>
                                @else
                                <input class="toggle_membre" type="checkbox" data-toggle="toggle" data-style="ios" data-on="non dispo 😴" checked disabled>
                                @endif
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
            <!-- ./Team member -->
            

        </div>
    </div>
</section>
{{$users->links()}}


@endsection

@section('scripts')
    @parent
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection