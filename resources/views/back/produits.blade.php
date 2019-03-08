@extends('layouts.master')

@section('content')

<a href="{{route('create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un évènement</a><br><br>

<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin')}}">Liste des évènements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/partenaire')}}">Liste des partenaires</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active tabAdmin" href="{{url('/admin/produits')}}">Liste des produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tabAdmin" href="{{url('/admin/utilisateur')}}">Liste des utilisateurs</a>
  </li>
</ul>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Statut</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <td>{{$product->nom}}</td>
    
      <td>{{$product->prix}}</td>
    
    
      <td>{{$product->status}}</td>
      <td>
            <a href=""><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('produits.destroy', $product->id)}}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input class="btn btn-danger" type="submit" value="supprimer" >
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$products->links()}}

@endsection