@extends('layouts.back')

@section('content')

<

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
                <button class="fas fa-trash user-delete" type="submit" value="supprimer" >
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection