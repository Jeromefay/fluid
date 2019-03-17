@extends('layouts.master')

@section('content')

<div id="contactwrap">
    <div class="container">
        <div class="text-center">
          <h1>CONTACTEZ FLUID !</h1>
        </div>
    </div>
    <!-- /container -->
  </div>

<div class="bg-white">
	@if(session('message'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>{{ session('message') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
	
	<div class="col-md-6 col-md-offset-6 text-dark container">
		<form class="form-horizontal" method="POST" action="/contact" role="form">
			{{ csrf_field() }} 
				<div class="form-group">
					<label for="Name">Nom: </label>
					<input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
				</div>

				<div class="form-group">
					<label for="email">Email: </label>
					<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
				</div>

				<div class="form-group">
					<label for="message">Message: </label>
					<textarea type="text" class="form-control luna-message" id="message" placeholder="Ecrivez votre message ici" name="message" required></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary" value="Envoyer">Envoyer</button>
				</div>
		</form>
	</div>
 </div> <!-- /container -->
@endsection