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
               <img src="{{asset('img/icon/payment.png')}}" alt="">
            </div>
            <h5>{{Lang::get('main.paymentmethod')}} </h5>
            <div class="line-d"></div>
            <div class="card-payments">
               <a href="#tab1 active"  data-bs-toggle="tab"><img src="{{asset('img/icon/visa1.png')}}"  alt=""></a> 
               <a href="#tab2"  data-bs-toggle="tab"><img src="{{asset('img/icon/paypall.png')}}" alt=""></a>
               <a href="#tab3"  data-bs-toggle="tab"><img src="{{asset('img/icon/bank.png')}}" alt=""></a>
            </div>
            <div class="col-lg-6">
                     <div class="form-shipping">
                        <!-- <form> -->
                        <label for="">{{Lang::get('main.nameoncard')}} </label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.cardnumber')}} </label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.cvv')}} </label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.month')}} </label>
                        <select name="" id="" class="select-1">
                           <option> Select Month</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.year')}}Year</label>
                        <select name="" id="" class="select-1">
                           <option> Select Year</option>
                        </select>
                     </div>
                  </div>
</div>
            <div class="tab-content " style="display:none">
               <div class="tab-pane fade show active" id="tab1">
                   <div class="row">
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <!-- <form> -->
                        <label for="">{{Lang::get('main.nameoncard')}}</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.cardnumber')}} </label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.cvv')}} </label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.month')}} </label>
                        <select name="" id="" class="select-1">
                           <option> Select Month</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-shipping">
                        <label for="">{{Lang::get('main.year')}} </label>
                        <select name="" id="" class="select-1">
                           <option>Select Year</option>
                        </select>
                     </div>
                  </div>
               </div>
               </div>
               <div class="tab-pane fade " id="tab2">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <!-- <form> -->
                        <label for="">Name on Card</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Card Number</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">CVV</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Month</label>
                        <select name="" id="" class="select-1">
                           <option> Select Month</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Year</label>
                        <select name="" id="" class="select-1">
                           <option>Select Year</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade  " id="tab3">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <!-- <form> -->
                        <label for="">Name on Card</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Card Number</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">CVV</label>
                        <input type="text" placeholder="" class="shipping" >
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Month</label>
                        <select name="" id="" class="select-1">
                           <option> Select Month</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="form-shipping">
                        <label for="">Year</label>
                        <select name="" id="" class="select-1">
                           <option>Select Year</option>
                        </select>
                     </div>
                  </div>
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
