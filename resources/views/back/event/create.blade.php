@extends('layouts.master')


@section('content')

<div class="container">
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        <h1>Créer un événement</h1>
        {{ csrf_field() }}

        <label for="titre">Titre :</label>
        <input type="text" name="titre" value="{{old('titre')}}" class="form-control" id="titre" placeholder="Titre de l'événement">
        @if($errors->has('titre')) 
            <span class="error">{{$errors->first('titre')}}</span>
        @endif

        <label for="description">Description :</label>
        <input type="text" name="description" value="{{old('description')}}" class="form-control" id="description" placeholder="Description de l'événement">
        @if($errors->has('description')) 
            <span class="error">{{$errors->first('description')}}</span>
        @endif

        <label for="prix">Prix :</label>
        <input type="text" name="prix" value="{{old('prix')}}" class="form-control" id="prix" placeholder="Prix de l'événement">
        @if($errors->has('prix')) 
            <span class="error">{{$errors->first('prix')}}</span>
        @endif

        <label for="date">Date :</label>
        <input type="text" name="date" value="{{old('date')}}" class="form-control" id="date" placeholder="Date de l'événement">
        @if($errors->has('date')) 
            <span class="error">{{$errors->first('date')}}</span>
        @endif

        @forelse($categories as $id => $titre)
            <label class="control-label" for="categories">{{$titre}}</label>
            <input name="categories[]" value="{{$id}}" type="checkbox" class="form-control" id="categories">
        @empty
        @endforelse


        <h2>Status</h2>
        <input type="radio" @if(old('status')=='published') checked @endif name="status" value="publié" checked> publier<br>
        <input type="radio" @if(old('status')=='brouillon') checked @endif name="status" value="brouillon" > dépublier<br>
        
        <div class="input-file">
            <h2>Image :</h2>
            <input class="file" type="file" name="picture" >
        </div>



        <button type="submit" class="btn btn-primary">Ajouter un événement</button>
    
    
    
    
    
    
    
    
    
    </form>
</div>





@endsection