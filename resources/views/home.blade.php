@extends('layouts.default')
@section('content')
<section class="main-dev bg-main">
   <div class="head-padding">
      <div class="container-fluid">
         <div class="row">
            <img src="{{asset('img/bg/girl.png')}}" alt="">
         </div>
      </div>
   </div>
</section>
<div class="box-categories text-center">
   <div class="container">
      <div class="row">
         <div class="search-categories">
            <select class=" select-inputs">
               <option>{{Lang::get('main.categories')}}</option>
            </select>
            <input type="search" placeholder=" {{lang::get('main.whatareyoulookingfor')}} " class="search-input">
            <button type="submit" class=" btn-search"> {{lang::get('main.search')}}  </button>
         </div>
      </div>
   </div>
</div>
<section class="sec2">
   <div class="info-us">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="card">
                  <img src="{{ asset('img/icon/icon-1.png') }}" width="50" height="50" alt="">
                  <h3> {{lang::get('main.quickdelivery')}} </h3>
                  <p> {{lang::get('main.lorem2')}} </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="card">
                  <img src="{{ asset('img/icon/icon-2.png') }}" width="50" height="50"  alt="">
                  <h3>{{lang::get('main.bestservices')}} </h3>
                  <p> {{lang::get('main.lorem2')}} </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="card">
                  <img src="{{ asset('img/icon/icon-3.png') }}" width="50" height="50"  alt="">
                  <h3> {{lang::get('main.securepayment')}} </h3>
                  <p> {{lang::get('main.lorem2')}} </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="card">
                  <img src="{{ asset('img/icon/label.png') }}" width="50" height="50"  alt="">
                  <h3> {{lang::get('main.bestprice')}} </h3>
                  <p> {{lang::get('main.lorem2')}} </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sec3">
   <div class="cate-sect">
      <div class="container-fluid">
         <div class="row">
            <div class="title-explore">
               <h1> {{lang::get('main.explorebycategories')}} </h1>
               <h4> {{lang::get('main.lorem1')}}  </h4>
            </div>
         </div>
         <!-- <section class="swip-sec"> -->
         <div class="row">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image:url('../img/slider/f2.png')">
                  {{lang::get('main.furniture')}}  
                  </div>
                  <div class="swiper-slide" style="background-image:url('../img/slider/teen.png')">
                  {{lang::get('main.teenagers')}}  
                  </div>
                  <div class="swiper-slide" style="background-image:url('../img/slider/womenclothes.png')">
                  {{lang::get('main.women')}}   
                  </div>
                  <div class="swiper-slide" style="background-image:url('../img/slider/man.png')">
                  {{lang::get('main.man')}}  
                  </div>
                  <div class="swiper-slide" style="background-image:url('../img/slider/kids.png')">
                  {{lang::get('main.kids')}}  
                  </div>
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="sec4">
   <div class="catergory">
      <div class="container">
         <div class="row">
            <div class="title-cat">
               <div class="h-l"></div>
               <h1> {{lang::get('main.categories')}} </h1>
            </div>
         </div>
         <div class="row">
            <nav class="owl-filter-bar owl-filt-bar owl-brs-filt nav-steps">
               <a href="#tab1" class="item active"  data-bs-toggle="tab"> {{lang::get('main.newarrival')}} </a>
               <a href="#tab2" class="item" data-bs-toggle="tab"> {{lang::get('main.bestseller')}} </a>
               <a href="#tab3" class="item" data-bs-toggle="tab"> {{lang::get('main.featuredproduct')}} </a>
               <a href="#tab4" class="item" data-bs-toggle="tab"> {{lang::get('main.offers')}} </a>
               <a href="#tab5" class="item"data-bs-toggle="tab"> {{lang::get('main.toprated')}} </a>
             
            </nav>
            <div class="navi-right">
               <a  class="item owl-next " ><i class="fas fa-long-arrow-alt-left"></i>  </a>
               <a  class="item owl-prev"><i class="fas fa-long-arrow-alt-right"></i></a>
               </div>
            <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab1">
            <div class="owl-carousel owl-theme owl-cat owl-cates ">
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
            </div>
            <div class="tab-pane fade " id="tab2">
            <div class="owl-carousel owl-theme owl-cat owl-cates ">
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
            </div>
            <div class="tab-pane fade " id="tab3">
            <div class="owl-carousel owl-theme owl-cat owl-cates ">
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
            </div>
            <div class="tab-pane fade " id="tab4">
            <div class="owl-carousel owl-theme owl-cat owl-cates ">
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
            </div>
            <div class="tab-pane fade " id="tab5">
            <div class="owl-carousel owl-theme owl-cat owl-cates ">
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
               <div class="item best">
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
                           <p class="manufacturer-name"><a href="#">{{Lang::get('main.wbw')}} </a></p>
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
            </div>
            </div>
            
         </div>
      </div>
   </div>
</section>

<section class="sec5">
   <div class="para-img bg-parallax">
      <div class="container">
         <div class="row">
         </div>
      </div>
   </div>
   </div>
</section>
<section class="sec4">
   <div class="catergorys">
      <div class="container">
         <div class="row">
            <div class="title-cat">
               <div class="h-l"></div>
               <h1> {{lang::get('main.popularthisweek')}} </h1>
            </div>
         </div>
         <div class="row">
            <div class="sec-cate">
               <div class="col-lg-2 col-md-12 col-sm-12 order-1">
                  <div class="cate-name ">
                     <div class="card-pup">
                        <img src="{{ asset('img/popularweek/b4.png') }}" class="card-img" alt="">
                     </div>
                     <div class="card-pup">
                        <img src="{{ asset('img/popularweek/b3.png') }}" class="card-img" alt="">
                     </div>
                     <div class="card-pup">
                        <img src="{{ asset('img/popularweek/b2.png') }}" class="card-img" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-12 col-sm-12 order-2">
                  <div class="">
                     <div class="card-pups">
                        <img src="{{ asset('img/popularweek/b1.png') }}" class="card-img" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-12 col-sm-12 order-3">
                  <div class="title-desc">
                     <h3> {{lang::get('main.wrapdressorwrapdesk')}} </h3>
                     <div class="stars-span">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <p class="p-price">$250</p>
                     <p class="p-desc"> {{lang::get('main.lorem2')}} </p>
                     <button class=" btn-pinks "><img src="{{ asset('img/icon/cart1.png') }}" class="img-bt" width="20" alt=""> {{lang::get('main.addtocart')}} </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sec4">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/bg/bgc.png') }}" alt="First slide">
            <div class="fashion">
               <h1>  {{lang::get('main.fashionable')}}   <br> {{lang::get('main.hats')}}  </h1>
               <button class="btn-getcode">  {{lang::get('main.getpromocode')}} </button>
            </div>
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/bg/bgparallax.png') }}" alt="Second slide">
            <div class="fashion">
               <h1> {{lang::get('main.fashionable')}}   <br>  {{lang::get('main.hats')}} </h1>
               <button class="btn-getcode">  {{lang::get('main.getpromocode')}}</button>
            </div>
         </div>
         <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/bg/bgparallax.png') }}" alt="Third slide">
            <div class="fashion">
               <h1> {{lang::get('main.fashionable')}}   <br>
               {{lang::get('main.hats')}}     
               </h1>
               <button class="btn-getcode"> {{lang::get('main.getpromocode')}} </button>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"> {{lang::get('main.previous')}} </span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"> {{lang::get('main.next')}} </span>
      </a>
   </div>
</section>
<section class="sec4">
   <div class="catergory">
      <div class="container">
         <div class="row">
            <div class="title-cat">
               <div class="h-l"></div>
               <h1> {{lang::get('main.news')}} </h1>
            </div>
         </div>
         <div class="row">
            <div class="sec-cate">
               <div class="col-lg-4  col-md-6 col-sm-12">
                  <div class="card-new">
                     <div class="img-new">
                        <img src="{{asset('img/news/a3.png')}}" alt="">
                     </div>
                     <div class="title-new">
                        <h3> {{lang::get('main.weoffres')}} </h3>
                        <p> {{lang::get('main.by')}}  <strong> {{lang::get('main.admin')}}   </strong> , 12 Jan 2022</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4  col-md-6 col-sm-12">
                  <div class="card-new">
                     <div class="img-new">
                        <img src="{{asset('img/news/a1.png')}}" alt="">
                     </div>
                     <div class="title-new">
                        <h3> {{lang::get('main.weoffres')}} </h3>
                        <p> {{lang::get('main.by')}} <strong> {{lang::get('main.admin')}} </strong> , 12 Jan 2022</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4  col-md-6 col-sm-12">
                  <div class="card-new">
                     <div class="img-new">
                        <img src="{{asset('img/news/a2.png')}}" alt="">
                     </div>
                     <div class="title-new">
                        <h3> {{lang::get('main.weoffres')}} </h3>
                        <p> {{lang::get('main.by')}} <strong> {{lang::get('main.admin')}} </strong> , 12 Jan 2022</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sec3">
   <div class="cate-sect">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-3">
               <div class="title-explore">
                  <h1> {{lang::get('main.brands')}} </h1>
                  <h4> {{lang::get('main.lorem1')}}  </h4>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="owl-carousel owl-theme brands-carousel">
                  <div class="items box">
                     <img src="{{asset('img/logo/a1.png')}}" class="brand-img" width="50px" alt="">
                  </div>
                  <div class="items box">
                     <img src="{{asset('img/logo/a2.png')}}" class="brand-img" width="50px" alt="">
                  </div>
                  <div class="items box">
                     <img src="{{asset('img/logo/a3.png')}}" class="brand-img" width="50px" alt="">
                  </div>
                  <div class="items box">
                     <img src="{{asset('img/logo/a4.png')}}" class="brand-img" width="50px" alt="">
                  </div>
                  <div class="items box">
                     <img src="{{asset('img/logo/a5.png')}}" class="brand-img" width="50px" alt="">
                  </div>
                  <div class="items box">
                     <img src="{{asset('img/logo/a5.png')}}" class="brand-img" width="50px" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <img src="{{asset('img/logo/a2.png')}}" alt=""> -->
</section>
<section class="sec3">
   <div class="Testimonials-sect">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="title-explore">
                  <h1> {{lang::get('main.testimonials')}} </h1>
                  <h4> {{lang::get('main.lorem1')}}  </h4>
                  <h4> {{lang::get('main.lorem1')}} </h4>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-12  col-md-12 col-sm-12">
               <div class="owl-carousel owl-theme tests-carousel">
                  <div class="items boxes cards ">
                     <div class="stars-span">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <br>
                     <p> {{lang::get('main.lorem2')}} </p>
                     <div class="cards2">
                        <h5>{{lang::get('main.wonca')}}  </h5>
                        <img src="{{asset('img/testi/a1.png')}}" class="brand-img" width="50px" alt="">
                     </div>
                  </div>
                  <div class="items boxes cards">
                     <div class="stars-span">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <br>
                     <p> {{lang::get('main.lorem2')}} </p>      
                   <div class="cards2">
                        <h5> {{lang::get('main.wonca')}}  </h5>
                        <img src="{{asset('img/testi/a1.png')}}" class="brand-img" width="50px" alt="">
                     </div>
                  </div>
                  <div class="items boxes cards">
                     <div class="stars-span">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <br>
                     <p> {{lang::get('main.lorem2')}} </p>
                                          <div class="cards2">
                        <h5> {{lang::get('main.wonca')}}  </h5>
                        <img src="{{asset('img/testi/a1.png')}}" class="brand-img" width="50px" alt="">
                     </div>
                  </div>
                  <div class="items boxes cards">
                     <div class="stars-span">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                     <br>
                     <p> {{lang::get('main.lorem2')}} </p>
                                          <div class="cards2">
                        <h5>{{lang::get('main.wonca')}}   </h5>
                        <img src="{{asset('img/testi/a1.png')}}" class="brand-img" width="50px" alt="">
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
</section>
<!-- 
   http://jsfiddle.net/wandoledzep/VgHb7/
   <div class="slider">
   	<div class="slide">
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   	</div>
   	<div class="slide">
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   	</div>
   	<div class="slide">
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   		<div class="row">
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
               <img src="http://placehold.it/75x75" alt="" />
   		</div>
   	</div>
   </div>
    -->
@stop
