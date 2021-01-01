            <!-- FEATURED PRODUCTS -->
            <div class="featured-products">
                <div class="container">
                    <div class="row">
                        <h5 class="heading"><span>Featured Products</span></h5>
                        <ul class="filter" data-option-key="filter">
                            <li><a href="#" data-option-value=".jumper" class="selected">Jumper</a></li>
                            <li><a href="#" data-option-value=".romper">Romper</a></li>
                            <li><a href="#" data-option-value=".dress">Dress</a></li>
                            <li><a href="#" data-option-value=".daily">One Set Clothes</a></li>
                            <li><a href="#" data-option-value=".sleeveless">Sleeveless Jumper</a></li>
                        </ul>
                        <div id="isotope" class="isotope">
                            <div class="isotope-item jumper">
                                <div class="product-item">
                                    @foreach($products as $product)
                                    @if ($product->type == 3)
                                    <div class="item-thumb">
                                        <div class="badge new">New</div>
                                        <img src="{{ explode(',', $product->image_url)[0] }}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-id="{{ $product->id }}" data-slug="{{ $product->slug }}"></div>
                                        {{-- 
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                         --}}
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
                                        <span class="product-price"><s>Rp {{ number_format($product->start_price) }}</s> Rp {{ number_format($product->final_price) }}</span>
                                        {{-- 
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="red"></a>
                                        </div>
                                         --}}
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="isotope-item romper">
                                <div class="product-item">
                                    @foreach($products as $product)
                                    @if ($product->type == 4)
                                    <div class="item-thumb">
                                        <div class="badge new">New</div>
                                        <img src="{{ explode(',', $product->image_url)[0] }}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-id="{{ $product->id }}" data-slug="{{ $product->slug }}"></div>
                                        {{-- 
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                         --}}
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
                                        <span class="product-price"><s>Rp {{ number_format($product->start_price) }}</s> Rp {{ number_format($product->final_price) }}</span>
                                        {{-- 
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="red"></a>
                                        </div>
                                         --}}
                                    </div>
                                    @endif
                                    @endforeach



                                </div>
                            </div>
                            <div class="isotope-item dress">
                                <div class="product-item">
                                    @foreach($products as $product)
                                    @if ($product->type == 1)
                                    <div class="item-thumb">
                                        <div class="badge new">New</div>
                                        <img src="{{ explode(',', $product->image_url)[0] }}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-id="{{ $product->id }}" data-slug="{{ $product->slug }}"></div>
                                        {{-- 
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                         --}}
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
                                        <span class="product-price"><s>Rp {{ number_format($product->start_price) }}</s> Rp {{ number_format($product->final_price) }}</span>
                                        {{-- 
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="red"></a>
                                        </div>
                                         --}}
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="isotope-item daily">
                                <div class="product-item">
                                    @foreach($products as $product)
                                    @if ($product->type == 2)
                                    <div class="item-thumb">
                                        <div class="badge new">New</div>
                                        <img src="{{ explode(',', $product->image_url)[0] }}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-id="{{ $product->id }}" data-slug="{{ $product->slug }}"></div>
                                        {{-- 
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                         --}}
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
                                        <span class="product-price"><s>Rp {{ number_format($product->start_price) }}</s> Rp {{ number_format($product->final_price) }}</span>
                                        {{-- 
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="red"></a>
                                        </div>
                                         --}}
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="isotope-item sleeveless">
                                <div class="product-item">
                                    @foreach($products as $product)
                                    @if ($product->type == 5)
                                    <div class="item-thumb">
                                        <div class="badge new">New</div>
                                        <img src="{{ explode(',', $product->image_url)[0] }}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-id="{{ $product->id }}" data-slug="{{ $product->slug }}"></div>
                                        {{-- 
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                         --}}
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
                                        <span class="product-price"><s>Rp {{ number_format($product->start_price) }}</s> Rp {{ number_format($product->final_price) }}</span>
                                        {{-- 
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="red"></a>
                                        </div>
                                         --}}
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            {{-- 
                            <div class="isotope-item accessories handbags">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <img src="images/products/accessories/6.jpg" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                        <span class="product-price">$99.00 <em>- Pre order</em></span>
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="darkgrey"></a>
                                            <a href="#" class="litebrown"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             --}}
                        </div>
                    </div>
                </div>
            </div>
