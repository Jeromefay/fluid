@extends('layouts.master')

@section('content')

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/utilisateurs')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table thead-dark">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($partners as $partner)
    <tr>
      <td>{{$partner->nom}}</td>
    
      <td>{{$partner->description}}</td>
    
    </tr>
    @endforeach
  </tbody>
</table>

@endsection