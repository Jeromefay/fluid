@extends('layouts.back')

@section('content')

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th class="avatar">photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
    <td class="avatar"><img src="{{asset('images/'.$user->url_img_user)}}"></td>
      <td>{{$user->nom}}</td>
      <td>{{$user->prenom}}</td>
    
      <td>{{$user->email}}</td>

      <td>
            <a href=""><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('utilisateurs.destroy', $user->id)}}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                
                  <button class="fas fa-trash user-delete" type="submit" value="supprimer" >
                
            </form>
        </td>
    
    </tr>
    @endforeach
  </tbody>
</table>
<div class="text-right mt-5">
  <a href="{{route('utilisateurs.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un événement</a>
</div>
@endsection