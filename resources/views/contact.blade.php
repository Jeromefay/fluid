@extends('layout')

@section('content')

<div id="contactwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-3">
          <h1>CONTACTEZ-NOUS !</h1>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>

<div class="container">
	@if(session('message'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	
	<div class="col-md-8 col-md-offset-6">
		<form class="form-horizontal" method="POST" action="/contact" role="form">
			{{ csrf_field() }} 
			<div class="form-group">
			<label for="Name">Name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">Email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
		</div>

		<div class="form-group">
			<label for="message">message: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn" value="Send">Send</button>
			</div>
		</form>
	</div>
 </div> <!-- /container -->
@endsection