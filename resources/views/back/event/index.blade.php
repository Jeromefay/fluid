@extends('layouts.back')

@section('content')



<table class="table table-striped table-hover mt-5">
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
            <a href="{{route('event.edit', $event->id)}}"><i class="fas fa-pen-square"></i></a>
      </td>
            
      <td>
            <form class="delete" method="POST" action="{{route('event.destroy', $event->id)}}">
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
  <a href="{{route('event.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter un événement</a>
</div>

{{$events->links()}}

@endsection