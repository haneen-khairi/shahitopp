@extends('layouts.default')
@section('content')

<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
    
                    <li><a href="{{ url('/') }}">{{Lang::get('main.home')}}   </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/cart') }}" class="active">{{Lang::get('main.cart')}}   </a></li>
                </div>
            </div>
            <div class="row">
                <div class="wish-header">
                    <h4>{{Lang::get('main.products')}}   <span> ( 3 items) </span></h4>
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

<div class="apply-code">
    <div class="container">
        <div class="row">
            <input type="text" class="input-form input-code" placeholder="Enter coupon code" name="" id="">
            <button type="submit" class="btn-code">{{Lang::get('main.applycode')}} </button>
        </div>
    </div>
</div>

<section class="wish-sec">
   <div class="wish-list  ">
      <div class="container">
         <div class="row">
         </div>
         <div class="row">
            <table class="table table-confirm table-responsive-sm" style="background-color:#fafafa ;">
               <thead>
                  <th>
                     <h4>{{lang::get('main.pricedetails')}}  </h4>
                  </th>
                  <th></th>
               </thead>
               <tbody>
                  <tr>
                     <td>{{lang::get('main.suptitle')}} </td>
                     <td class="text-right">$360</td>
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
                     <td>{{lang::get('main.delivercharges')}}</td>
                     <td class="text-right color-green" >{{lang::get('main.free')}} </td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td>
                        <h5>{{Lang::get('main.total')}} </h5>
                     </td>
                     <td class="text-right">
                        <h4 class="color-blue">$350</h4>
                     </td>
                  </tr>
               </tfoot>
            </table>
         </div>
         <div class="btnblock">
            <button type="submit" class=" btn-blocks"> {{lang::get('main.checkout')}} </button>
         </div>
      </div>
   </div>
   </div>
</section>

@stop