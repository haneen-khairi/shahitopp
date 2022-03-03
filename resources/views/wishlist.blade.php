@extends('layouts.default')
@section('content')

<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
                    <!-- <h3><a href="#">Home </a><span> > </span> <a href="#">Favorites </a>Favorites</h3> -->
                <li><a href="{{ url('/') }}"> {{Lang::get('main.home')}}   </a></li>
                <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                <li><a href="{{ url('/wishlist') }}" class="active"> {{lang::get('main.favorites')}}   </a></li>
                </div>
            </div>
            <div class="row">
                <div class="wish-header">
                    <h4>{{lang::get('main.products')}}   <span> ( 4 items) </span></h4>
                </div>
                
            </div>
            <div class="row">
                <div class="wish-table ">
                <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">{{lang::get('main.image')}}  </th>
      <th scope="col">{{lang::get('main.productname')}}  </th>
      <th scope="col">{{lang::get('main.price')}}  </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img src="{{ asset('img/wish/a2.png') }}"></th>
      <td class="cen">Women's Cotton Skirt</td>
      <td class="cen-price">$100.99</td>
      <td class="cen"><a href="#"> Product Details</a></td>
      <td  class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
    </tr>
    <tr>
      <th scope="row"><img src="{{ asset('img/wish/a3.png') }}"></th>
      <td class="cen">Women's Cotton Skirt</td>
      <td class="cen-price">$100.99</td>
      <td class="cen"><a href="#"> Product Details</a></td>
      <td  class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
    </tr>
    <tr>
      <th scope="row"><img src="{{ asset('img/wish/a4.png') }}"></th>
      <td class="cen">Women's Cotton Skirt</td>
      <td class="cen-price">$100.99</td>
      <td class="cen"><a href="#"> Product Details</a></td>
      <td  class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
    </tr>
    <tr>
      <th scope="row"><img src="{{ asset('img/wish/a1.png') }}"></th>
      <td class="cen">Women's Cotton Skirt</td>
      <td class="cen-price">$100.99</td>
      <td class="cen"><a href="#"> Product Details</a></td>
      <td  class="cen"><a href="#"> <a href="#"> <img src="{{ asset('img/trash.png') }}" width="20"></a></a></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</section>




@stop