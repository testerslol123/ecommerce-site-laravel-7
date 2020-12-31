@extends('layouts.layouts')

@section('css')
@stop

@section('content')
<div class="container" style="margin:5%">
    <div class="row">
        <div class="col-md-5 col-sm-6">
            <div class="owl-carousel sync1">
                @foreach(explode(',', $product->image_url) as $image)
                <div class="item">
                    <img src="{{ $image }}" alt="foto product"> 
                </div>
                @endforeach
            </div>

            <div class="owl-carousel sync2">
                @foreach(explode(',', $product->image_url) as $image)
                <div class="item">
                    <img src="{{ $image }}" alt="foto product"> 
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-md-7 col-sm-6">
            <div class="product-single">
                <form method="POST" action="{{ url('checkout') }}">
                    @csrf

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div class="ps-header">
                            <h3>{{ $product->name }}</h3>
                            <div class="ratings-wrap">
                                <div class="ratings">
                                    <span class="act fa fa-star"></span>
                                    <span class="act fa fa-star"></span>
                                    <span class="act fa fa-star"></span>
                                    <span class="act fa fa-star"></span>
                                    <span class="act fa fa-star"></span>
                                </div>
                            </div>
                            <div class="ps-price"><span>Rp. {{ number_format($product->start_price) }}</span> Rp. {{ number_format($product->final_price) }}</div>
                    </div>

                    <div class="ps-stock">
                        Available: <a href="#">In Stock</a>
                    </div>
                    <div class="sep"></div>
                    <div class="ps-color">
                        <p>Color<span>*</span></p>
                        <select name="pilihan_warna">
                            @foreach(explode(',', $product->variant_warna) as $warna)
                            <option value="{{ $warna }}">{{ $warna }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="space10"></div>
                    <div class="row select-wraps">
                        <div class="col-md-7 col-sm-7 select-sizes">
                            <p>Size<span>*</span></p>
                            <select name="sizes">
                                @foreach(explode(',', $product->variant_size) as $size)
                                <option value="{{ $size }}">{{ $size }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <p>Quantity<span>*</span></p>
                            <select name="quantity">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="space20"></div>
                    {{-- 
                    <div class="share">
                        <span>
                            <a href="#" class="fa fa-heart-o" onclick="return false;"></a>
                            <a href="#" class="fa fa-signal" onclick="return false;"></a>
                            <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>
                        </span>
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    <div class="space20"></div>
                     --}}
                    <div class="sep"></div>
                    <a class="btn-color" href="#" onclick="parentNode.submit();">Checkout this item</a>
                    {{-- <a class="btn-black" href="#">Go to Details</a> --}}
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script type="text/javascript">
    $('.sync1').owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: true,
        pagination: false,
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
        navigationText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ]
    });

    $('.sync2').owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: true,
        pagination: false,
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
        navigationText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ]
    });

</script>
@stop

@section('modal')
@stop

@section('footer-widget')
    {{-- @include('homepage.footer-widget') --}}
@stop

@section('newsletter')
@stop
