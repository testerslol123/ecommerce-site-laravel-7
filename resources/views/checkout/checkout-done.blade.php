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
                        <h3>Silahkan transfer order total di samping beserta dengan kode unik nya untuk mempermudah pengecekan</h3>
                        <h2 style="color:green;">No rek: 4811-2360-33</h2>
                        <h3>Atas nama EFAH</h3>
                        <p>Notes: Setelah transfer, tolong konfirmasi ke WA dengan nomor unik grand total yang sudah di transfer. Supaya mempermudah pengecekan</p>

                        <form id="shipping-zip-form">
                            @csrf
                            <h3>Data Customer:</h3>
                            <p>Nomor order anda: {{ $order->grand_total }}</p>
                            <p>Nama: {{ $order->name }}</p>
                            <p>Alamat: {{ $order->alamat }}</p>
                            <p>Kelurahan: {{ $order->kelurahan }}</p>
                            <p>Kecamatan: {{ $order->kecamatan }}</p>
                            <p>Kode Pos: {{ $order->kodepos }}</p>
                            <p>Email: {{ $order->email }}</p>
                            <p>No telp: {{ $order->telp_no }}</p>
                        </form>
                    </div>
                    <div class="clearfix"></div>   
                    <div class="account-form">
                        <p>Silahkan WA ke nomor di bawah ini untuk konfirmasi langsung:</p>
                        <a href="https://wa.me/6285891367977?text={{ urlencode('saya ingin melakukan konfirmasi order. No order saya adalah ' . $order->grand_total) }}" class="" target="_blank">Click untuk konfirmasi Whatsapp</a>
                    </div>
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
                                        <div class="">Rp. {{ number_format($subtotal_price) }}</div>
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
                                        <div class="">Rp. {{ number_format($order->grand_total) }}</div>
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