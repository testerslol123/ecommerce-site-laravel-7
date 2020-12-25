<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="owl-carousel sync1">
                    </div>

                    <div class="owl-carousel sync2">
                    </div>
                </div>
                <div class="col-md-7 col-sm-6">
                    <div class="product-single">
                        <form method="POST" action="{{ url('checkout') }}">
                            @csrf

                            <input type="hidden" name="product_id" value="">

                            <div class="ps-header">
                            </div>

                            <div class="ps-stock">
                                Available: <a href="#">In Stock</a>
                            </div>
                            <div class="sep"></div>
                            <div class="ps-color">
                            </div>
                            <div class="space10"></div>
                            <div class="row select-wraps">
                                <div class="col-md-7 col-sm-7 select-sizes">
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
    </div>
</div>
