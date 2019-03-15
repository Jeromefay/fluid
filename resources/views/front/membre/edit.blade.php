@extends('layouts.master')

@section('content')
<h1>Modifier mes informations :  </h1>
<div class="row" id='create-user'>
    <div class="col-md-6">
        <form action="{{route('membre.update', $user->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="form">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="{{$user->nom}}" class="form-control" id="nom" placeholder="Titre de l'événement">
                    @if($errors->has('nom'))
                        <span class="error bg-warning">{{$errors->first('nom')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" value="{{$user->prenom}}" class="form-control" id="prenom" placeholder="Titre de l'évènement">
                        @if($errors->has('prenom'))
                            <span class="error bg-warning">{{$errors->first('prenom')}}
                            </span>@endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">E-mail</label>
                        <input name="email" value="{{$user->email}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="email">
                                    @if($errors->has('email'))
                                    <span class="error bg-warning ">{{$errors->first('email')}}</span>
                                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Adresse</label>
                        <input name="adresse" value="{{$user->adresse}}"type="text" class="form-control" id="exampleFormControlInput1">
                        @if($errors->has('adresse'))
                            <span class="error bg-warning ">{{$errors->first('adresse')}}</span>
                        @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Code postal</label>
                        <input name="code_postal" value="{{$user->code_postal}}"type="text" class="form-control" id="exampleFormControlInput1">
                                    @if($errors->has('code_postal')) <span class="error bg-warning ">{{$errors->first('code_postal')}}</span>@endif
                            </div>

                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Ville</label>
                                    <input name="ville" value="{{$user->ville}}"type="text" class="form-control" id="exampleFormControlInput1">
                                    @if($errors->has('ville')) <span class="error bg-warning ">{{$errors->first('ville')}}</span>@endif
                            </div>

                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Téléphone</label>
                                    <input name="telephone" value="{{$user->telephone}}"type="text" class="form-control" id="exampleFormControlInput1">
                                    @if($errors->has('telephone')) <span class="error bg-warning ">{{$errors->first('telephone')}}</span>@endif
                            </div>

                        <div class="form-group">
                                <label for="exampleFormControlInput1">competence_1</label>
                                <input name="competence_1" value="{{$user->competence_1}}"type="text" class="form-control" id="exampleFormControlInput1">
                                @if($errors->has('competence_1')) <span class="error bg-warning ">{{$errors->first('competence_1')}}</span>@endif
                            </div>
                                <button type="submit" class="btn btn-primary">Modifier mes informations</button>
                    </div>


            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">

                    <div class="form-group">
                                <label for="exampleFormControlInput1">Pseudo Facebook</label>
                                <input name="pseudo_facebook" value="{{$user->pseudo_facebook}}"type="text" class="form-control" id="exampleFormControlInput1">
                                @if($errors->has('pseudo_facebook')) <span class="error bg-warning ">{{$errors->first('pseudo_facebook')}}</span>@endif
                        </div>

                        <div class="form-group">
                    <label for="dispo">Disponibilité :
                    <input type="radio" @if($user->dispo == 'oui') checked @endif name="dispo" value="oui">Oui
                    <input type="radio" @if($user->dispo == 'non') checked @endif name="dispo" value="non">Non </label>
                    </div>

                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea type="text" name="description"class="form-control">{{$user->description}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                    </div>

            <div class="input-file">
                <p>Votre image de profil :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning ">{{$errors->first('picture')}}</span> @endif
            </div>
            @if($user->url_img_user)
            <div class="form-group">
                      <h3>Image associée :<h3>
                      <img src="{{url('images', $user->url_img_user)}}" style="width: 120px;
    height: 120px;
    border-radius: 50%" alt="">
            </div>
              @endif


             </form>
             <form class="delete" method="POST" action="{{route('membre.destroy', $user->id)}}">
                {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                SUPPRIMER VOTRE COMPTE
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Suppression de votre compte</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Attention en confirmant votre compte sera supprimé définitivement
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ANNULER</button>
                                        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
                                    </div>
                                    </div>
                                </div>
                                </div>

            </div>
            <!-- #end col md 6 -->


        </div>

@endsection
