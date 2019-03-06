@extends('layouts.master')

@section('content')


<div class="container">


<div class="row justify-content-between">

@foreach($users as $user)


<div class="card" style="width: 13rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="height:2rem">Cras justo odio</li>
    <li class="list-group-item" style="height:2rem">Dapibus ac facilisis in</li>
    <li class="list-group-item" style="height:2rem">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Voir le profil</a>
  </div>
</div>
@endforeach
</div>
</div>

{{$users->links()}}

@endsection