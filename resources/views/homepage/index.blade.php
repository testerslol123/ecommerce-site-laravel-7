@extends('layouts.layouts')

@section('css')
@stop

@section('content')
    <!-- SLIDER -->
	@include('homepage.slider')
    <!-- BLOCKS WRAP -->
    <div class="block-main container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="images/blocks/1.jpg" class="img-responsive" alt=""/>
                    <div class="bs-text-down text-center hvr-outline-out">
                        Menswear<span>Intimates Fall/Winter 2015</span>				
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="images/blocks/2.jpg" class="img-responsive" alt=""/>
                    <div class="bs-text-center text-center">
                        Accesories<span>Get a new look with Smile Collection</span>				
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="block-content">
                    <img src="images/blocks/3.jpg" class="img-responsive" alt=""/>
                    <div class="bs-text-down text-center">
                        Womenswear<span>Smile Collection new arrivals</span>				
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    @include('homepage.featured-product')
    @include('homepage.policy')
    @include('homepage.blog')
    @include('homepage.new-arrival')
    <div class="space30 clearfix"></div>
    @include('homepage.testimonial')
    @include('homepage.latest-product')
    <div class="space10 clearfix"></div>
    @include('homepage.client')



@stop

@section('javascript')
@stop

@section('modal')
	@include('homepage.shop-modal')
@stop

@section('footer-widget')
	@include('homepage.footer-widget')
@stop

@section('newsletter')
	{{-- @include('homepage.newsletter') --}}
@stop
