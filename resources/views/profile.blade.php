@extends('layouts.default')
@section('content')
<section class="wish-sec">
   <div class="wish-list">
      <div class="container">
         <div class="row">
            <div class="wish-title">
               <!-- <h3><a href="#">Home </a><span> > </span> <a href="#">Favorites </a>Favorites</h3> -->
               <li><a href="{{ url('/') }}"> {{Lang::get('main.home')}} </a></li>
               <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
               <li><a href="{{ url('/profile') }}" class="active"> {{Lang::get('main.profile')}}  </a></li>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-12">
            <div id="sidebar">
               <div class="img-profile">
                  <img src="{{asset('img/profile.png')}}" class="img-profile" alt="">
                  <h3>Ibtesam hello</h3>
               </div>
               <div class="nav-sidebar">
                  <ul class="list-unstyled nav nav-pills list-profile components mb-5" role="navigation">
                     <li class="active">
                        <a href="#order" data-toggle="pill" role="tab" aria-controls="order" class=""><i class="far fa-comment-alt"></i>  {{Lang::get('main.myorder')}} </a>
                     </li>
                 
                     <li>
                        <a href="#wallet" data-toggle="pill" role="tab" aria-controls="wallet"><i class="fas fa-wallet"></i>  {{Lang::get('main.mywallet')}} </a>
                     </li>
                     <li>
                        <a href="#coupon" data-toggle="pill" role="tab" aria-controls="coupon"><i class="fas fa-percentage"></i>  {{Lang::get('main.mycoupon')}} </a>
                     </li>
                     <li>
                        <a href="#setting" data-toggle="pill" role="tab" aria-controls="setting"><i class="fas fa-cogs"></i> {{Lang::get('main.stting')}} </a>
                     </li>
                     <li>
                        <a href="#signout" data-toggle="pill" role="tab" aria-controls="signout"><i class="fas fa-sign-out-alt"></i> {{Lang::get('main.signout')}} </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-8 col-md-9 col-sm-12">
            <div class="tab-content content">
               <div id="order" class="tab-pane fade in active" role="tabpanel">
                  <div class="head-lefter ">
                     <button class="btn-neworder">  {{Lang::get('main.neworder')}} </button>
                     <select name="Newest" id="">
                        <option>Newest</option>
                        <option>Newest</option>
                        <option>Newest</option>
                        <option>Newest</option>
                     </select>
                  </div>
                  <div class="profile-table">
                     <table class="table-profile table-responsive-sm table-responsive-md ">
                        <thead class="text-center">
                           <tr class="prof-table ">
                              <th> <input type="checkbox" name="" id=""> </th>
                              <th> {{Lang::get('main.orderid')}}</th>
                              <th> {{Lang::get('main.date')}} </th>
                              <th> {{Lang::get('main.productnumber')}} </th>
                              <th> {{Lang::get('main.total')}} </th>
                              <th> {{Lang::get('main.state')}} </th>
                              <th> {{Lang::get('main.viewinv')}} </th>
                           </tr>
                        </thead>
                        <tbody class=" text-center">
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/deliverstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/deliverstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/shipstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/shipstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/shipstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/canceledstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/canceledstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                           <tr class="tr-c">
                              <th> <input type="checkbox" name="" id=""></th>
                              <td>#0013234</td>
                              <td>Nov 2th 2020</td>
                              <td>3</td>
                              <td>$ 21,4</td>
                              <td><img src="{{asset('img/icon/canceledstatus.png')}}" width="80" alt=""></td>
                              <td><a href="{{asset('file/file.txt')}}" download="invoice"><img src="{{ asset('img/icon/f-download.png') }}" width="30" alt=""></a> </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="foot-profile">
                        <p>showing 7 of 33 orders </p>
                        <div class="text-left"></div>
                        <button class="btn-prevs"> {{Lang::get('main.prev')}} </button>
                        <button class="btn-nexts"> {{Lang::get('main.next')}} </button>
                     </div>
                  </div>
               </div>
               <!-- <div class=" tab-pane fade" id="address" role="tabpanel" >
                  </div> -->
               <div class=" tab-pane fade" id="wallet" role="tabpanel">
                  <div class="row">
                     <div class="col"></div>
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-input">
                           <h4>  {{Lang::get('main.balanc')}} : <span>350$</span> </h4>
                        </div>
                        <div class=" flex-rows-s">
                           <div class="card-wallets">
                              <img src="{{asset('img/icon/plus.png')}}" width="40" alt="">
                              <p>  {{Lang::get('main.rechrge')}} </p>
                           </div>
                           <div class="card-wallets">
                              <img src="{{asset('img/icon/minus.png')}}" width="40" alt="">
                              <p> {{Lang::get('main.wbala')}} </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col"></div>
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-input">
                           <h4> <span>April 2020</span> </h4>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <div class=" col-lg-12 col-md-12 col-sm-12">
                              <div class="card-wallet">
                                 <div class="row-wallet">
                                    <img src="{{asset('img/icon/bb.png')}}" width="40" alt="">
                                 </div>
                                 <div class="rr">
                                    <h5> {{Lang::get('main.addtowallet')}}  </h5>
                                    <span>06-10-2019</span>
                                 </div>
                                 <div class="row-wallet2">
                                    <p>30$</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col"></div>
                     <hr />
                  </div>
               </div>
               <div class=" tab-pane fade" id="coupon" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-coupon">
                           <a href="" class="active"> {{Lang::get('main.excoup')}} </a> <a href=""> {{Lang::get('main.copcen')}}  </a> <a href="">{{Lang::get('main.usedcoup')}} </a> <a href=""> {{Lang::get('main.excoup')}} </a>
                        </div>
                        <div class="coupon-type">
                           <div class="col-lg-6">
                              <select name="Coupon Type" class="select-coupon" id="">
                                 <option value=""> {{Lang::get('main.coupt')}} </option>
                              </select>
                           </div>
                           <div class="col-lg-6 ttt">
                              <span> {{Lang::get('main.mincon')}} </span>
                              <input type="text" class="cons" name="" id="">
                              <span>-</span>
                              <input type="text" class="cons" name="" id="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                     <div class="coupon-bg">
                        <div class="col-lg-12">
                           <div class="card-bg">
                              <span class="span1"> 15% OFF</span>
                              <p>27 Nov.2021-09 Dec.2021</p>
                              <div class="line-cut"></div>
                              <span class="span2">15%  {{Lang::get('main.forallcateg')}} </span>
                              <li> {{Lang::get('main.forpro')}} </li>
                              <li> {{Lang::get('main.forallclothes')}} </li>
                              <button class="btn-gotit"> {{Lang::get('main.gotit')}} </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" tab-pane fade" id="setting" role="tabpanel">
                  <div class="row">
                     <div class="col"></div>
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-input">
                           <h4>  {{Lang::get('main.pdetail')}} </h4>
                           <div class="upload-image">
                              <img src="{{asset('img/profile.png')}}" class="main-img-round" alt="">
                              <input type="file" class="file-img-upload">
                              <img src="{{asset('img/icon/u-img.png')}}" class="img-uploaded1" alt="">
                              <h5>Ibtesam Osama</h5>
                           </div>
                           <form class="form-row" name="profile">
                              <input type="hidden" id="userId" value="blue">
                              <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                 <label for="username"> {{Lang::get('main.fname')}} </label>
                                 <input type="text" class="form-control" id="username" placeholder="Ibtesam" value="Ibtesam">
                              </div>
                              <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                 <label for="last"> {{Lang::get('main.lname')}} </label>
                                 <input type="text" class="form-control" id="last" placeholder="Osama" value="Osama">
                              </div>
                              <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                 <label for="phone"> {{Lang::get('main.phonenum')}}  </label>
                                 <input type="number" class="form-control" id="phone" placeholder="0000003003" value="123-456-1234">
                              </div>
                              <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              </div>
                              <button class="btn-neworder" id="saveProfile" data-form="profile" type="button"> {{Lang::get('main.save')}} </button>
                           </form>
                        </div>
                        <div class="col"></div>
                        <hr />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col"></div>
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-input">
                           <h4>  {{Lang::get('main.email')}}  </h4>
                           <form class="form-row" name="profile">
                              <input type="hidden" id="userId" value="blue">
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for="username"> {{Lang::get('main.oldmail')}}  </label>
                                 <input type="email" class="form-control" id="username" placeholder="" value="ibtesam@gmail.com">
                              </div>
                              <br>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for="">  {{Lang::get('main.newmail')}} </label>
                                 <input type="email" class="form-control" id="last" placeholder="ibtesam@gmail.com" value="ibtesam@gmail.com">
                              </div>
                              <br>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for=""> {{Lang::get('main.confemail')}} </label>
                                 <input type="email" class="form-control" id="phone" placeholder="ibtesam@gmail.com" value="123-ibtesam@gmail.com-1234">
                              </div>
                              <button class="btn-neworder" id="saveProfile" data-form="profile" type="button"> {{Lang::get('main.save')}} </button>
                           </form>
                        </div>
                        <div class="col"></div>
                        <hr />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col"></div>
                     <div class="col-lg-11 col-md-10 col-sm-12">
                        <div class="form-profile-input">
                           <h4> {{Lang::get('main.pass')}}    </h4>
                           <form class="form-row" name="profile">
                              <input type="hidden" id="userId" value="blue">
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for="username">{{Lang::get('main.oldpass')}} </label>
                                 <input type="password" class="form-control" id="username" placeholder="" value="********">
                              </div>
                              <br>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for="">{{Lang::get('main.newpass')}} </label>
                                 <input type="password" class="form-control" id="last" placeholder="" value="">
                              </div>
                              <br>
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <label for="">{{Lang::get('main.confirmpass')}}  </label>
                                 <input type="password" class="form-control" id="phone" placeholder="" value="">
                              </div>
                              <button class="btn-neworder" id="saveProfile" data-form="profile" type="button"> {{Lang::get('main.save')}} </button>
                           </form>
                        </div>
                        <div class="col"></div>
                        <hr />
                     </div>
                  </div>
               </div>
               <div class=" tab-pane fade" id="sign-out" role="tabpanel">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop