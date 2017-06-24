@extends('layouts.master')
{{--@extends('partials.header')--}}
@section('title')
    Laravel Shopping Cart 1
@endsection
@section('content')
    @foreach($product_data->chunk(3) as $productChunk)
{{--        {{ $productChunk}};--}}
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $product->imagePath }}"
                     alt="..." class="img-responsive">
                <div class="caption">
                    <h2>{{ $product->title }}</h2>
                    <p class="prod-description">{{ $product->description }}</p>
                    <div class="clearfix">
                        <div class="pull-left price">
                            {{ "RM ". $product->price }}
                        </div>
                        <a href="{{ route('product.addToCart', ['id' => $product->id ]) }}" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{--<div class="col-sm-6 col-md-4">--}}
            {{--<div class="thumbnail">--}}
                {{--<img src="http://en.volkswagen.com/content/medialib/vwd4/global/mom/scirocco_gp/cutouts/cutout_pure_white042014/_jcr_content/renditions/rendition.file/cutout_pure_white_042014.png"--}}
                     {{--alt="..." class="img-responsive">--}}
                {{--<div class="caption">--}}
                    {{--<h2>Volkswagen Car 1</h2>--}}
                    {{--<p class="prod-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at dolore facilis fugiat--}}
                        {{--nesciunt praesentium, repellendus soluta. Aliquid, debitis est! A, accusantium hic illum impedit--}}
                        {{--libero magni molestiae nobis ut.</p>--}}
                    {{--<div class="clearfix">--}}
                        {{--<div class="pull-left price">--}}
                            {{--RM 70,499--}}
                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-6 col-md-4">--}}
            {{--<div class="thumbnail">--}}
                {{--<img src="http://en.volkswagen.com/content/medialib/vwd4/global/mom/scirocco_gp/cutouts/cutout_pure_white042014/_jcr_content/renditions/rendition.file/cutout_pure_white_042014.png"--}}
                     {{--alt="..." class="img-responsive">--}}
                {{--<div class="caption">--}}
                    {{--<h2>Volkswagen Car 1</h2>--}}
                    {{--<p class="prod-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at dolore facilis fugiat--}}
                        {{--nesciunt praesentium, repellendus soluta. Aliquid, debitis est! A, accusantium hic illum impedit--}}
                        {{--libero magni molestiae nobis ut.</p>--}}
                    {{--<div class="clearfix">--}}
                        {{--<div class="pull-left price">--}}
                            {{--RM 70,499--}}
                        {{--</div>--}}
                        {{--<a href="#" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    @endforeach
@endsection