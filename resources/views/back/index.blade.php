@extends('layouts.master')

@section('content')

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/utilisateur')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table thead-dark">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">description</th>
      <th scope="col">Prix</th>
      <th scope="col">Date</th>
      <th scope="col">Statut</th>
      <th scope="col">Catégorie</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <td>{{$event->titre}}</td>
    
      <td>{{$event->description}}</td>
    
      <td>{{$event->prix}}</td>
    
      <td>{{$event->date}}</td>
    
      <td>{{$event->status}}</td>
      <td>{{$event->category->titre}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$events->links()}}

@endsection