@extends('layouts.master')

@section('content')

<div class="bg-white text-dark">
	<div class="container">
		<h1>Nos produits</h1>
		<p>Voici une liste des produits que nous vous proposons, si vous souhaitez en acheter, c'est par <a href="">ici</a>.</p>
	</div>
	<div class="row justify-content-center">
	@foreach($products as $product)
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/'.$product->pictureProduct->url_img_products)}}">
                    <img class="img-responsive img-shop" alt="$product->pictureProduct->titre" src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" />
                    <div class='img-title bg-white text-dark'>
				</a>
					<p>{{$product->nom}}</p>
					<p>{{$product->prix}} €</p>
				</div> <!-- text-right / end -->
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
@endsection