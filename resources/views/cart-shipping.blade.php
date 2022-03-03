@extends('layouts.default')
@section('content')

<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
                   
                    <li><a href="{{ url('/') }}">{{Lang::get('main.home')}}  </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/cart') }}" class="active">{{Lang::get('main.cart')}}  </a></li>
                </div>
            </div>
            <div class="row">
                <div class="head-imgg">
                    <img src="{{asset('img/icon/shipping.png')}}" alt="">
                </div>
                <!-- <form> -->
                <div class="col-lg-6">
                    <div class="form-shipping">


                        <label for="">{{Lang::get('main.name')}} </label>
                        <input type="text" placeholder="" class="shipping">


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">
                        <label for="">{{Lang::get('main.email')}} </label>
                        <input type="text" placeholder="" class="shipping">



                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">





                        <label for="">{{Lang::get('main.phonenumber')}} </label>
                        <input type="text" placeholder="" class="shipping">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">


                        <label for="">{{Lang::get('main.street1')}} </label>
                        <input type="text" placeholder="" class="shipping">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">


                        <label for="">{{Lang::get('main.street2')}}</label>
                        <input type="text" placeholder="" class="shipping">


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">



                        <label for="">{{Lang::get('main.country')}} </label>
                        <select name="" id="" class="select-1">
                            <option> United State</option>
                        </select>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-shipping">
                        <label for="">{{Lang::get('main.city')}} </label>
                        <input type="text" placeholder="" class="shipping">
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="form-shipping">


                        <label for="">{{Lang::get('main.state')}} </label>
                        <select name="" id="" class="select-2">
                            <option value="">select</option>
                        </select>


                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-shippings">


                        <label for="">{{Lang::get('main.zip')}} </label>
                        <input type="text" placeholder="" class="zip-code-input">


                    </div>
                </div>
                <!-- </form> -->
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