@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
	@foreach($products as $product)
		<div class='list-group gallery'>
			
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/'.$product->pictureProduct->url_img_products)}}">
                    <img class="img-responsive img-shop" alt="" src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" />
                    <div class='img-title'>
                        <p class='text-muted'>{{$product->nom}}</p>
                    </div> <!-- text-right / end -->
                </a>
			</div>
			 <!-- col-6 / end -->
		</div>
		@endforeach <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
@endsection