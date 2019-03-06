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
<div class="container px-0 py-4">
  <div class="pp-category-filter">
    <div class="row">
      <div class="col-sm-12"><a class="btn btn-primary pp-filter-button" href="#" data-filter="all">All</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="compétence 1">Compétence 1</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="compétence 2">Compétence 2</a><a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="compétence 3">Compétence 3</a></div>
    </div>
  </div>
</div>
<div class="container px-0">
  <div class="pp-gallery">
    <div class="card-columns">
      @foreach($users as $user)
      <div class="card" data-groups="">
          <figure class="pp-effect"><img class="img-fluid" src="images/1-nature.jpg" alt="Nature"/>
            <figcaption>
            <a href="image-detail.html"><div class="h4">{{$user->name}}</div></a>
              <p>Compétence 1</p>
              <p>Compétence 2</p>
              <p>Compétence 3</p>
            </figcaption>
          </figure>
        </div>
        @endforeach
      
    </div>
  </div>
</div>
{{$users->links()}}
@endsection