@extends('layouts.default')
@section('content')

<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">

                    <li><a href="{{ url('/') }}"> {{Lang::get('main.home')}}  </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/aboutus') }}" class="active">{{lang::get('main.aboutus')}} </a></li>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img-about">
                        <img src="{{asset('img/atheer.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="text-about bg-text-about">
                        <h3>{{lang::get('main.engatheer')}} </h4>
                            <p>{{lang::get('main.lorem2')}} </p>
                            <p>{{lang::get('main.lorem2')}} </p>
                            <p>{{lang::get('main.lorem2')}} </p>
                            <p>{{lang::get('main.lorem2')}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pd-mission">
    <div class="our-missions text-center">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="our-mission">
                        <img src="{{asset('img/icon/icon1.png')}}" alt="">
                        <h3>{{lang::get('main.value')}} </h3>
                        <p>{{lang::get('main.storespecializing')}} </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-121">
                    <div class="our-mission">
                        <img src="{{asset('img/icon/icon2.png')}}" alt="">
                        <h3>{{lang::get('main.mission')}} </h3>
                        <p>{{lang::get('main.storespecializing')}} </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="our-mission">
                        <img src="{{asset('img/icon/icon3.png')}}" alt="">
                        <h3> {{lang::get('main.vision')}} </h3>
                        <p>{{lang::get('main.storespecializing')}} </p>
                    </div>
                </div>
            </div>

        </div>
</section>
<section class="pd-ourteam text-center">
    <div class="container">
        <div class="row">
            <div class="ourteam text-center">
                <h1>{{lang::get('main.team')}} </h1>
            </div>
        </div>
        <div class="our-teams">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a1.png')}}" alt="">
                    <h5> {{lang::get('main.marshall')}}  </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a2.png')}}" alt="">
                    <h5> {{lang::get('main.marshall')}}  </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a3.png')}}" alt="">
                    <h5> {{lang::get('main.marshall')}}  </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a4.png')}}" alt="">
                    <h5>{{lang::get('main.marshall')}}   </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            </div>
            </div>
            <div class="our-teams">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a1.png')}}" alt="">
                    <h5>{{lang::get('main.marshall')}}   </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a2.png')}}" alt="">
                    <h5>{{lang::get('main.marshall')}}   </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a3.png')}}" alt="">
                    <h5> {{lang::get('main.marshall')}}  </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-3">
                <div class="our-team">
                    <img src="{{asset('img/team/a4.png')}}" alt="">
                    <h5> {{lang::get('main.marshall')}}  </h5>
                    <p>{{lang::get('main.director')}} </p>
                </div>
                </div>
            </div>
        </div>
 
</section>
@stop