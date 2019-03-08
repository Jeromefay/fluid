@extends('layouts.master')

@section('content')

<a href="{{route('create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un évènement</a><br><br>

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link active tabAdmin" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/produits')}}">Liste des produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/utilisateur')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Date</th>
      <th scope="col">Statut</th>
      <th scope="col">Catégorie</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <td>{{$event->titre}}</td>
    
      <td>{{$event->prix}}</td>
    
      <td>{{$event->date}}</td>
    
      <td>{{$event->status}}</td>
      <td>{{$event->category->titre}}</td>
      <td>
            <a href=""><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('destroy', $event->id)}}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input class="btn btn-danger" type="submit" value="supprimer" >
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$events->links()}}

@endsection