@extends('layouts.default')
@section('content')
<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
                    <!-- <h3><a href="#">Home </a><span> > </span> <a href="#">Favorites </a>Favorites</h3> -->
                    <li><a href="{{ url('/') }}">{{Lang::get('main.home')}}  </a></li>
                    <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                    <li><a href="{{ url('/contactus') }}" class="active"> {{lang::get('main.contactus')}}  </a></li>
                </div>
            </div>
            <div class="row">
                <div class="contact-sec text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108326.05020386566!2d35.774960517883294!3d31.95576707913111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca16bf9d3b4b3%3A0x93469833cbd1f3dc!2zMzHCsDU3JzIwLjgiTiAzNcKwNTAnNDIuMCJF!5e0!3m2!1sen!2sjo!4v1643252148203!5m2!1sen!2sjo" class="map-look" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="contact-des">
                        <h5>{{lang::get('main.contactdetails')}} </h5>
                        <p>{{lang::get('main.lorem2')}} </p>

                    </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="contact-devs text-center">


                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="cont-p">
                                    <i class="fas fa-mobile-alt"></i>

                                    <h5>{{lang::get('main.phone')}} </h5>
                                    <p> {{lang::get('main.phone')}}  1 : 07912345567</p>
                                    <!-- <p> Phone 2 : 07912345567</p> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="cont-p">
                                    <i class="fas fa-map-marker-alt"></i>

                                    <h5>{{lang::get('main.address')}} </h5>
                                    <p>{{lang::get('main.address2')}} </p>
                                    <!-- <p> Spring Stone London Oxford Streen Jorda</p> -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="cont-p">
                                    <i class="far fa-envelope"></i>

                                    <h5>{{lang::get('main.email')}} </h5>
                                    <p>Supportstore@support.com</p>
                                    <!-- <p>info@support.com</p> -->
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
<section class="sec-more">
    <div class="more-contact">
        <div class="container">
            <div class="row">
                <div class="more-title  text-center">
                    <h5>{{lang::get('main.gettouch')}} </h5>
                    <p>{{lang::get('main.suggestion')}} </p>

                </div>


            </div>
            <div class="row">
                <div class="more-form text-center">
                    <form action="">
                        <div class="input-more  text-center">
                            <input type="text" class="input-la" name="" placeholder="{{lang::get('main.enteryourname')}} " id="">
                            <input type="email" class="input-la" name="" placeholder="{{lang::get('main.youremail')}} " id="">
                            <input type="text" class="input-la" name="" placeholder="{{lang::get('main.subject')}} " id="">

                        </div>
                        <label for="">{{lang::get('main.messegehere')}} </label>
                        <textarea name="" id="" class="text-area-contact" cols="30" rows="10"></textarea>
                        <br>
                        <button class="btn-done">{{lang::get('main.send')}} </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>




@stop