@extends('layouts.master')

@section('content')

<div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <!--=================== filter portfolio start====================-->
            <div class="portfolio gutters grid img-container">
                <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>
                @foreach($products as $product)
                <div class="grid-item branding  col-sm-12 col-md-6 col-lg-3">
                    <a href="{{asset('images/'.$product->pictureProduct->url_img_products)}}" title="project name 1">
                        <div class="project_box_one">
                            <img src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" alt="pro1" />
                            <div class="product_info">
                                <div class="product_info_text">
                                    <div class="product_info_text_inner">
                                        <i class="ion ion-plus"></i>
                                        <h4>{{$product->titre}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
</div>
@endsection