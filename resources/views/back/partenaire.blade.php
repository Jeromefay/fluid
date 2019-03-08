@extends('layouts.master')

@section('content')

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active tabAdmin" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/produits')}}">Liste des utilisateurs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/utilisateurs')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">description</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($partners as $partner)
    <tr>
      <td>{{$partner->nom}}</td>
    
      <td>{{$partner->description}}</td>
      <td>
            <a href=""><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('partenaire.destroy', $partner->id)}}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input class="btn btn-danger" type="submit" value="supprimer" >
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection