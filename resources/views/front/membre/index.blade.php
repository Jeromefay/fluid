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
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="SeChercher par compétence" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
  </form>
</nav>
<div class="container px-0">
  <div class="pp-gallery">
    <div class="card-columns">
      @foreach($users as $user)
      <div class="card" data-groups="">
          <figure class="pp-effect"><img class="img-fluid" src="{{asset('images/'.$user->url_img_user)}}" alt="Nature"/>
            <figcaption>
            <a href="image-detail.html"><div class="h4">{{$user->name}}</div></a>
              <p>{{$user->competence_1}}</p>
              <p>{{$user->competence_2}}</p>
              <p>{{$user->competence_3}}</p>
            </figcaption>
          </figure>
        </div>
        @endforeach
      
    </div>
  </div>
</div>
{{$users->links()}}
@endsection