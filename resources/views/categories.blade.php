@extends('layouts.default')
@section('content')


<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">

                    <li><a href="{{ url('/') }}"> {{Lang::get('main.home')}} </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/categories') }}" class="active">{{lang::get('main.categories')}}  </a></li>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>


<!-- breadcrumb area start -->

<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-1 order-lg-1">
                <aside class="sidebar-wrapper">
                    
                    <div class="sidebar-single">
                        <h5 class="sidebar-title"> {{lang::get('main.filterbyprice')}}  </h5>
                        <div class="sidebar-body">
                            <ul class="checkbox-container categories-list">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2"> {{lang::get('main.allprice')}}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">$100 - $250</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">$250 - $500</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">$750 - $1000</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">$1000 - $1500 </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title"> {{lang::get('main.filterbyrating')}} </h5>
                        <div class="sidebar-body">
                            <ul class="checkbox-container categories-list">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                                        <label class="custom-control-label" for="customCheck12">
                                            <div class="stars-span">
                                                <span class="fa fa-star checked"></span>

                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                                        <label class="custom-control-label" for="customCheck13">
                                            <div class="stars-span">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>

                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck14">
                                        <label class="custom-control-label" for="customCheck14">
                                            <div class="stars-span">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>

                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">
                                            <div class="stars-span">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>

                                            </div>
                                        </label>

                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck15">
                                        <label class="custom-control-label" for="customCheck15">
                                            <div class="stars-span">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title"> {{lang::get('main.filterbybrand')}} </h5>
                        <div class="sidebar-bodys">
                            <ul class="checkbox-container categories-list">
                                <li>

                                    <select class="brand-selects">
                                        <option>Brand</option>
                                        <option>Brand</option>
                                        <option>Brand</option>
                                        <option>Brand</option>
                                        <option>Brand</option>
                                    </select>

                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-banner">
                        <div class="img-container">
                            <a href="#">
                                <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </aside>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-2 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode b-blackss">
                                        <a class="active" href="#" data-target="grid-view" data-bs-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view" data-bs-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p> Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Newest Items</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list wrapper start -->
                    <div class="shop-product-wrap grid-view row mbn-30">
                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
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
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    </div><br>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a5.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a5.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a6.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a6.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a7.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a7.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#">Diamond</a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div><br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a8.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a8.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a9.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a9.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a11.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a11.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a12.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a12.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a13.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a13.png')}}" alt="product">

                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a19.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a19.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a1.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a1.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a2.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a2.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>

                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>

                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- product grid start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a3.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="#"> {{Lang::get('main.wbw')}} </a></p>
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
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product grid end -->

                            <!-- product list item end -->
                            <div class="product-list-item">
                                <figure class="product-thumb">
                                    <a href="#">
                                        <img class="pri-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                        <img class="sec-img" src="{{asset('img/cart/a4.png')}}" alt="product">
                                    </a>

                                    <div class="button-group b-blackss">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"> <img class="" src="{{asset('img/cart/love.png')}}" alt="product"></span></a>
                                    </div>

                                </figure>
                                <div class="product-content-list">
                                    <div class="manufacturer-name">
                                        <a href="#"> {{Lang::get('main.wbw')}} </a>
                                    </div>


                                    <h5 class="price-regular"><a href="#">$180</a></h5>
                                    <div class="stars-span">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <br>
                                    <p> {{Lang::get('main.lorem2')}} </p>
                                    <button class="btn btn-cart">{{lang::get('main.addtocart')}}</button>
                                </div>
                            </div>
                            <!-- product list item end -->
                        </div>
                        <!-- product single item start -->

                        <!-- product single item start -->

                        <!-- product item list wrapper end -->

                        <!-- start pagination area -->
                        <!-- <div class="paginatoin-area text-center b-blackssa">
                                <ul class="pagination-box bb-b">
                                    <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>

    @stop