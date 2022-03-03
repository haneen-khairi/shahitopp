<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.5.7.2.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/footer.css') }}">
    








  
    <link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/nice-select.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/profile.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/login.css') }}"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

<link rel="stylesheet" href="{{ asset('css/'.app()->getLocale().'/resetss.css') }}">

<title> {{Lang::get('main.shahitop')}}</title>
</head>

<body dir="">

<div class="nav-heads">
    <div class="header">
        <div class="head">
            <div class="container-fluid">
                <div class="row">
                    <ul class="header-menu">
                        <li class="lang-link"><a href="#" > <img src="{{ asset('img/icon/global.svg') }}"> {{lang::get('main.language')}} <i class='fa fa-caret-down'></i></a>
                            <ul class="sub-menu"> 
                                <li><a href="/en/"><img src="{{  asset('img/flag/us.svg')}}" alt="English" /> English</a></li>
                                <li><a href="/ar/"><img src="{{  asset('img/flag/jo.svg')}}" alt="Arabic" />عربي</a></li>
                            </ul>
                        </li>
                        <div class="v-l"></div>
                        <li class="lang-link"><a href="#" > <img src="{{ asset('img/icon/currency.svg') }}">  {{lang::get('main.currency')}} </a> 
                        <ul class="sub-menus">
                                <li><a href="#">$USD</a></li>
                                <li><a href="#">$JOD</a></li>
                            </ul>
                    </li>
                        <div class="v-l"></div>
                        <li><a href="{{ url('/{lang}/wishlist') }}"> <img src="{{ asset('img/icon/passion.svg') }}"> {{lang::get('main.wishtlist')}} </a></li>
                        <div class="v-l"></div>
                        <li><a href="{{ url('/{lang}/cart') }}"> <img src="{{ asset('img/icon/cart.svg') }}"> {{lang::get('main.cart')}}  </a></li>
                       
                        <!-- <div class="v-l"></div>
                        <li><a href="{{ url('/profile') }}"> <img src="{{ asset('img/icon/user.svg') }}"> Profile</a></li> -->
                        <div class="v-l"></div>
                        <li><a href="tel:07993939393"> <img src="{{ asset('img/icon/whatsapp.svg') }}">  {{lang::get('main.whatsapp')}} </a></li>
                    </ul>
                    <div class="header-right">
                        <ul class="header-menu">
                            <li><a href="{{ url('/{lang}/login') }} ">  {{lang::get('main.signin')}} </a></li>
                            <div class="v-l"></div>
                            <li><a href="{{ url('/{lang}/signup') }}">  {{lang::get('main.signup')}} </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar nav-bg">

        <div class="logo-nav">
        <a href="{{ url('/{lang}/') }}"> <img src="{{ asset('img/logodark.png') }}" width="150"> </a>
        </div>
        <div class="header-menu nav-head text-center">
            <ul class="nav-ul">
        <li><a href="{{ url('/{lang}/') }}" class="active"> {{lang::get('main.home')}} </a></li>
        <li><a href="{{ url('/{lang}/categories') }}"> {{lang::get('main.categories')}} </a> </li>
        
        <li><a href="{{ url('/{lang}/profile') }}"> {{lang::get('main.profile')}} </li>
        <li><a href="{{ url('/{lang}/aboutus') }}"> {{lang::get('main.aboutus')}} </a></li>
        <li><a href="{{ url('/{lang}/contactus') }}"> {{lang::get('main.contactus')}}   </a></li>
        </ul>
        </div>
    </div>
</div>
<div class="mobile-nav">
<div class="logo-mob">
<a href="{{ url('/{lang}/') }}"> <img src="{{ asset('img/logo.png') }}" width="150"> </a>
</div>
<div class="mobile-burger">
    <a href="#" id="btn-mob">
   <div class="spans1"></div>
   <div class="spans2"></div>
   <div class="spans3"></div>
   </a>
</div>
<div class="mobile-navbar" id="div-mob">
    <ul class="nav-uls">
    <li><a href="{{ url('/{lang}/') }}" class="active"> {{lang::get('main.home')}} </a></li>
        <li><a href="{{ url('/{lang}/categories') }}"> {{lang::get('main.categories')}}  </a> </li>
        <li><a href="{{ url('/{lang}/profile') }}"> {{lang::get('main.profile')}} </li>
        <li><a href="{{ url('/{lang}/aboutus') }}"> {{lang::get('main.aboutus')}} </a></li>
        <li><a href="{{ url('/{lang}/contactus') }}"> {{lang::get('main.contactus')}} </a></li>
        <li><a href="{{ url('/{lang}/cart') }}"> <img src="{{ asset('img/icon/cart.svg') }}" width="20">  {{lang::get('main.cart')}} </a></li>
        <li><a href="{{ url('/{lang}/wishlist') }}"> <img src="{{ asset('img/icon/passion.svg') }}" width="20"> {{lang::get('main.wishtlist')}}    </a></li>
        <li><a href="#"><img src="{{  asset('img/flag/us.svg')}}" width="20" alt="English" /> {{lang::get('main.language')}} </a></li>
        <li><a href="#"> <img src="{{ asset('img/icon/currency.svg') }}" width="20">  {{lang::get('main.currency')}} </a> </li>
        <li><a href="tel:07993939393"> <img src="{{ asset('img/icon/whatsapp.svg') }}">  {{lang::get('main.whatsapp')}} </a></li>
        <li><a href="{{ url('/{lang}/signup') }}">  {{lang::get('main.signup')}} </a></li>
        <li><a href="{{ url('/{lang}/login') }} ">  {{lang::get('main.signin')}} </a></li>
    </ul>
</div>
</div>