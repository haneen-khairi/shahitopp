@extends('layouts.default')
@section('content')
    <section class="wish-sec ">
        <div class="wish-list">
            <div class="container">
                <div class="row">
                    <div class="wish-title">
                        <li><a href="{{ url('/') }}"> {{Lang::get('main.home')}}  </a></li>
                        <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                        <li><a href="{{ url('/product') }}" class="active"> {{Lang::get('main.products')}}   </a></li>
                    </div>
                </div>

                <div class="row">
                    {{--            <div class="col-lg-2 col-md-3 col-sm-3">--}}
                    {{--               <div class="product-img "  id="gal1">--}}

                    {{--               <a href="#" data-image="{{ asset('img/product/a1.png') }}"  data-zoom-image="{{ asset('img/product/a1.png') }}">--}}
                    {{--                  <img src="{{ asset('img/product/a1.png') }}"  id="img_02" class="" alt="">--}}
                    {{--                  </a>--}}
                    {{--                  <a href="#" data-image="{{ asset('img/product/a2.png') }}" data-zoom-image="{{ asset('img/product/a2.png') }}">--}}
                    {{--                  <img src="{{ asset('img/product/a2.png') }}" id="img_03" class="" alt="">--}}
                    {{--                  </a>--}}
                    {{--                  <a href="#" data-image="{{ asset('img/product/a3.png') }}" data-zoom-image="{{ asset('img/product/a3.png') }}">--}}
                    {{--                  <img src="{{ asset('img/product/a3.png') }}" id="img_04" class="" alt="">--}}
                    {{--                  </a>--}}
                    {{--                  <a href="#" data-image="{{ asset('img/product/a3.png') }}" data-zoom-image="{{ asset('img/product/a3.png') }}">--}}
                    {{--                  <img src="{{ asset('img/product/a3.png') }}" id="img_04" class="" alt="">--}}
                    {{--                  </a>--}}
                    {{--               </div>--}}
                    {{--            </div>--}}
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="product-image">
                            <!--               <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/61sYyfNwPSL._SL1024_.jpg" alt="" /> -->
                            <div class="image"></div>
                        </div>
                        <div class="row product-thumbnails">
                            <img src="{{ asset('img/product/aa.png') }}" alt="" class="img-thumbnail col-md-3 col-sm-3" />
                            <img src="{{ asset('img/product/a1.png') }}" alt="" class="img-thumbnail col-md-3 col-sm-3" />
                            <img src="{{ asset('img/product/a2.png') }}" alt="" class="img-thumbnail col-md-3 col-sm-3" />
                            <img src="{{ asset('img/product/a3.png') }}" alt="" class="img-thumbnail col-md-3 col-sm-3" />
                        </div>
                        {{--               <img id="img_01" src="{{ asset('img/product/aa.png') }}"  class="card-img  " data-zoom-image="{{ asset('img/product/aa.png') }}"/>--}}
                    </div>

                    <div class="col-lg-5 col-md-12 col-sm-3">
                        <div class="product-text">
                            <h2> {{Lang::get('main.www')}}  </h2>
                            <div class="stars-span">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                                <p class="revi"> {{lang::get('main.rev')}} </p>
                            </div>

                            <p class="p-prices">New Price : $1111.00</p>
                            <p class="old-price">Old Price : $<del>1299.00</del></p>
                            <div class="liness"></div>


                            <p class="p-descs"> {{Lang::get('main.lorem2')}}</p>
                            <div class="quantity">
                                <span>{{Lang::get('main.quantity')}}  </span>
                                <button class="b1" id="sub" onclick=""><i class="fas fa-minus"></i></button>

                                <input type="text" readonly="" value="1"  name="" id="qtyBox">
                                <button class="b2" id="add"><i class="fas fa-plus"></i></button>
                            </div>
                            <button class=" btn-pinks "><img src="{{ asset('img/icon/cart1.png') }}" class="img-bt" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                            <div class="social">
                                <h5>Share</h5>
                                <ul class="socials-media">
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="pro-det">
        <div class="container">
            <div class="row">
                <div class="products-detailss">
                    <div class="col-12">
                        <h4>{{Lang::get('main.pdetail')}} </h4>
                        <div class="linksss"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="product-brand ">
                        <h5>{{Lang::get('main.brand')}}  </h5>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-brand ">
                        <p>{{Lang::get('main.venis')}}  </p>

                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-brand ">
                        <h5>{{Lang::get('main.warranty')}}  </h5>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-brand ">
                        <p> 1 {{Lang::get('main.year')}}   </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="product-brand ">

                        <h5>{{Lang::get('main.color')}}  </h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-brand ">

                        <div class="color">
                            <a href="#">  <span class="c1"></span>    </a>
                            <a href="#"> <span class="c2"></span>    </a>
                            <a href="#"> <span class="c3"></span>     </a>
                            <a href="#">    <span class="c4"></span>   </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="product-brand ">

                        <h5>Size</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-brand ">

                        <div class="size">
                            <a href=""> <span>S</span> </a>
                            <a href=""> <span>M</span> </a>
                            <a href=""> <span>L</span> </a>
                            <a href=""> <span>XL</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3">
        <div class="Testimonials-sect">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-explores">
                            <h3>{{Lang::get('main.relatedproducts')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="owl-carousel owl-theme related-carousel">
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#">   {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#">  {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#"> {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#"> {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#"> {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="#">
                                            <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                            <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        </a>
                                        <div class="button-group b-blackss">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="#"> {{lang::get('main.wbw')}} </a></p>
                                        </div>
                                        <h6 class="price-regular">
                                            <a href="#">$180</a>
                                        </h6>
                                        <div class="stars-span">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <br>
                                        <button class="btn btn-cart"><img src="{{asset('img/icon/cart1.png')}}" width="20" alt=""> {{lang::get('main.addtocart')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-next-pre">
                            <button class="owl-nexts arrow-button"><i class="fas fa-arrow-left"> </i> </button>
                            <button class="owl-prevs arrow-button"> <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    <!-- <img src="{{asset('img/logo/a2.png')}}" alt=""> -->
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>{{Lang::get('main.cr')}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cards-review">
                        <img src="{{ asset('img/icon/mask.png')}}" width="60" alt="">
                        <div class="review-card text-left">
                            <h5>{{Lang::get('main.ibts')}}  </h5>

                            <div class="stars-span">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span>   {{lang::get('main.rev')}} </span>
                        </div>
                        <br>
                        <p>{{Lang::get('main.wwc')}}  </p>
                        <div class="text-right">
                            <p>29 Dec, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cards-review">
                        <img src="{{ asset('img/icon/mask.png')}}" width="60" alt="">
                        <div class="review-card text-left">
                            <h5>{{Lang::get('main.ibts')}} </h5>

                            <div class="stars-span">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span> {{lang::get('main.rev')}} </span>
                        </div>
                        <br>
                        <p> {{lang::get('main.wwc')}} </p>
                        <div class="text-right">
                            <p>29 Dec, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cards-review">
                        <img src="{{ asset('img/icon/mask.png')}}" width="60" alt="">
                        <div class="review-card text-left">
                            <h5>{{Lang::get('main.ibts')}} </h5>

                            <div class="stars-span">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span> {{lang::get('main.rev')}} </span>
                        </div>
                        <br>
                        <p> {{lang::get('main.wwc')}} </p>
                        <div class="text-right">
                            <p>29 Dec, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cards-review">
                        <img src="{{ asset('img/icon/mask.png')}}" width="60" alt="">
                        <div class="review-card text-left">
                            <h5>{{Lang::get('main.ibts')}} </h5>

                            <div class="stars-span">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <span> {{lang::get('main.rev')}} </span>
                        </div>
                        <br>
                        <p> {{lang::get('main.wwc')}} </p>
                        <div class="text-right">
                            <p>29 Dec, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="view-reviews"> {{Lang::get('main.vrev')}} </a>
                </div>

            </div>
        </div>
    </section>
@stop
