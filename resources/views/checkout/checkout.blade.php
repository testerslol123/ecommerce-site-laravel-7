@extends('layouts.layouts')

@section('css')
@stop



@section('content')
<!-- MAIN CONTENT -->
<div class="shop-single">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-8">
                <!-- HTML -->
                <div>
                    <h4 class="account-title"><span class="fa fa-chevron-right"></span>Checkout Method</h4>
                    <div class="account-form">
                        <form id="shipping-zip-form" method="POST" action="{{ url('checkout-done') }}">
                            @csrf
                            <ul class="form-list row">
                                <li class="col-md-12 col-sm-12">
                                    <label>Country <em>*</em></label>
                                    <select required name="country">
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </li> 
                                <li class="col-md-6 col-sm-6">
                                    <label>First Name <em>*</em></label>
                                    <input type="text" class="input-text" required name="first_name">
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <label>Last Name <em>*</em></label>
                                    <input type="text" class="input-text" required name="last_name">
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <label >Alamat <em>*</em></label>
                                    <input required type="text" class="input-text" name="alamat">
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <label>Kelurahan</label>
                                    <input required type="text" class="input-text" name="kelurahan">
                                </li> 
                                <li class="clearfix"></li>
                                <li class="col-md-6 col-sm-6">
                                    <label>Kecamatan</label>
                                    <input required type="text" class="input-text" name="kecamatan">
                                </li> 
                                <li class="col-md-6 col-sm-6">
                                    <label >Zip/Postal Code <em>*</em></label>
                                    <input required type="text" class="input-text" name="kode_pos">
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <label >Email <em>*</em></label>
                                    <input required type="text" class="input-text" name="email">
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <label >Phone Number <em>*</em></label>
                                    <input required type="text" class="input-text" name="phone_number">
                                </li>
                            </ul>

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="pilihan_warna" value="{{ $pilihan_warna }}">
                            <input type="hidden" name="pilihan_size" value="{{ $pilihan_size }}">
                            <input type="hidden" name="quantity" value="{{ $quantity }}">
                            <div class="buttons-set">
                                <button class="btn-black" type="submit">Place Order</button>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>   
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="side-widget space50">
                    <h3> <span> Your order </span></h3>
                    <div>
                        <table class="cart-table"> 
                            <tbody></tbody>
                            <tr>                                              
                                <td colspan="2">
                                    <div class="item-img col-md-5 col-sm-5">
                                        <a href="#"><img src="{{ explode(',',$product->image_url)[0] }}" class="img-responsive" alt=""/></a>
                                    </div>
                                    <div class="item-info col-md-7 col-sm-7">
                                        <h4>{{ $product->name }} x {{ $quantity }}</h4>
                                        <input type="hidden" name="warna" value="{{ $pilihan_warna }}">
                                        <input type="hidden" name="size" value="{{ $pilihan_size }}">
                                        <p>Warna: {{ $pilihan_warna }}</p>
                                        <p>Size: {{ $pilihan_size }}</p>
                                    </div>
                                </td> 
                                {{-- 
                                <td>
                                    <a href="#"> <i class="fa fa-trash-o"></i> </a>
                                </td>                                            

                                 --}} 
                            </tr> 
                            <tfoot>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td>
                                        <div class="">{{ $subtotal_price }}</div>
                                    </td> 
                                </tr>
                                <tr>
                                    <th>Shipping and Handling</th>
                                    <td>
                                        <div class="">Rp 10.000</div>
                                    </td> 
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td>
                                        <div class="">{{ $grand_total }}</div>
                                    </td> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('javascript')
@stop