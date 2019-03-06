@extends('layouts.master')

@section('content')

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active tabAdmin" href="{{url('/admin/utilisateurs')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Email</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
    
      <td>{{$user->email}}</td>

      <td>
            <a href=""><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('utilisateurs.destroy', $user->id)}}">
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