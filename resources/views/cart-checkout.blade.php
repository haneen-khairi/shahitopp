@extends('layouts.default')
@section('content')

<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
                   
                    <li><a href="{{ url('/') }}">{{Lang::get('main.home')}}  </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/cart') }}" class="active">{{lang::get('main.cart')}}  </a></li>
                </div>
            </div>
            <div class="row">
                <div class="head-imgg">
                    <img src="{{asset('img/icon/checkout.png')}}" alt="">
                </div>
                <div class="wish-header">
         
                </div>

            </div>
            <div class="row">
                <div class="wish-table  text-center ">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col"> {{lang::get('main.products')}} </th>
                                <th scope="col">{{lang::get('main.productname')}}   </th>
                                <th scope="col">{{lang::get('main.size')}} </th>
                                <th scope="col">{{lang::get('main.quantity')}}  </th>
                                <th scope="col"> {{lang::get('main.price')}} </th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="{{ asset('img/cart/a1.png') }}"></th>
                                <td class="cen">Women's Cotton Skirt</td>
                                <td class="cen">XL</td>
                                <td class="cen">
                                    <div class="quantity">
                                        <button onclick=""><i class="fas fa-minus"></i></i></button>
                                        <p>1</p>
                                        <button><i class="fas fa-plus"></i></i></button>
                                    </div>
                                </td>
                                <td class="cen-price">$100.99</td>
                                <td class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{ asset('img/cart/a2.png') }}"></th>
                                <td class="cen">Women's Cotton Skirt</td>
                                <td class="cen">XL</td>
                                <td class="cen">
                                    <div class="quantity">
                                        <button onclick=""><i class="fas fa-minus"></i></i></button>
                                        <p>1</p>
                                        <button><i class="fas fa-plus"></i></i></button>
                                    </div>
                                </td>
                                <td class="cen-price">$100.99</td>
                                <td class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="{{ asset('img/cart/a3.png') }}"></th>
                                <td class="cen">Women's Cotton Skirt</td>
                                <td class="cen">XL</td>
                                <td class="cen">
                                    <div class="quantity">
                                        <button onclick=""><i class="fas fa-minus"></i></i></button>
                                        <p>1</p>
                                        <button><i class="fas fa-plus"></i></i></button>
                                    </div>
                                </td>
                                <td class="cen-price">$100.99</td>
                                <td class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="wish-sec">
    <div class="wish-list  ">
        <div class="container">
            <div class="row">
 
            </div>
 
            <div class="row">

                <table class="table table-checks table-responsive-sm" style="background-color:#fafafa ;">
                    <thead>
                        <th>
                            <h4> {{lang::get('main.pricedetails')}} </h4>
                        </th>
                        <th></th>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td>{{lang::get('main.orderid')}} </td>
                            <td class="text-right">01212121212</td>
                        </tr>
                        <tr>
                            <td>{{lang::get('main.dateofperchase')}} </td>
                            <td class="text-right">20/8/2021</td>
                        </tr>
                        <tr class="line-me">
                            <td>{{lang::get('main.emailaddress')}} </td>
                            <td class="text-right">haneen.khairi96@gmail.com</td>
                        </tr>
                    
                        <tr>
                            <td>{{lang::get('main.shippingaddress')}} </td>
                            <td class="text-right">123,smith Steven Street 9xw 3944f <img src="{{asset('img/icon/edit.png')}}" width="20" alt=""></td>
                        </tr>
                        <tr>
                            <td>{{lang::get('main.shippingaddress')}} </td>
                            <td class="text-right"><img src="{{asset('img/icon/visa.png')}}" width="20" alt=""> **** **** **** 3202 <img src="{{asset('img/icon/edit.png')}}" width="20" alt=""></td>
                        </tr>
                        <tr>
                            <td>{{lang::get('main.discount')}} </td>
                            <td class="text-right">30%</td>
                        </tr>
                        <tr>
                            <td>{{lang::get('main.coupon')}} </td>
                            <td class="text-right">30%</td>
                        </tr>
                        <tr>
                            <td>{{lang::get('main.delivercharges')}} </td>
                            <td class="text-right color-green">{{lang::get('main.free')}}  </td>
                        </tr>
                    </tbody>
               
                    <tfoot>
                        <tr>
                            <td>
                                <h5>{{lang::get('main.totals')}} </h5>
                            </td>
                            <td class="text-right color-blue">
                                <h4 >$360</h4>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <!-- <div class="col-lg-6  col-md-6 col-sm-3">
                
              
                <ul class="left text-left">
                    <li>Sup Title</li>
                    <li>Discount</li>
                    <li>Coupon</li>
                    <li>Delivery Charges</li>
                </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-3">
                <ul class="  text-right right">
                <li>$ 360</li>
                <li>30%</li>
                <li>30%</li>
                <li style="color:#7ED321">Free</li>
                </ul>
                </div>
                <div class="line-d"></div>
                <div class="tabfoot">
                <div class="col-lg-6 col-md-6 col-sm-3">
                <h5 class="text-left">Totals</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-3">
                <h4 class="text-right" style="color:#567CD7">$360</h4>
                </div>
                </div> -->

            </div>
            <div class="btnblock">
                <button type="submit" class=" btn-blocks">{{lang::get('main.checkout')}} </button>
            </div>
        </div>
    </div>
    </div>

</section>


</div>
</div>
</div>
</div>
</section>




@stop