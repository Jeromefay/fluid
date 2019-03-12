@extends('layouts.back')

@section('content')



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
                <button class="fas fa-trash user-delete" type="submit" value="supprimer" >
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$products->links()}}

@endsection