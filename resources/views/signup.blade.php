<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.5.7.2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/resetss.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>{{Lang::get('main.shahitop')}}</title>
</head>

<body>
<section>
    <div class="login-sec">
        <div class="container">
            <div class="row">
                <div class="login-card text-center">
                <a href="{{ url('/') }}"> <img src="{{ asset('img/logo.png') }}" class="logo-login"  width="300"> </a>
                <h4> {{Lang::get('main.signup')}} </h4>
                <form>
                <img src="{{ asset('img/icon/user.png') }}" class="user-img" width="25">
                    <input type="text" class="email-input" name="" placeholder=" {{Lang::get('main.username')}} " id="">
                    <br>
                    <br>
                    <img src="{{ asset('img/icon/email.png') }}" class="user-img" width="25">
                    <input type="email" class="email-input" name="" placeholder=" {{Lang::get('main.email')}} " id="">
                    <br>
                    <br>
                    <img src="{{ asset('img/icon/user.png') }}" class="user-img" width="25">
                    <input type="email" class="email-input" name="" placeholder=" {{Lang::get('main.password')}} " id="">
                    <br>
                    <br>

                    <img src="{{ asset('img/icon/pass.png') }}" class="pass-img" width="25">
                    <input type="email" class="email-input" name="" placeholder=" {{Lang::get('main.conpassword')}}" id="">
                    

                    <div class="remmbers">
                   <span><input type="radio" name="remmber" id=""><label>   {{Lang::get('main.iagreeto')}}  </label> </span>  
                    
                    
                    </div>
                    <br>
                    <button type="submit" class="btn-signup"> {{Lang::get('main.signup')}} </button>
               
                        <p><strong> {{Lang::get('main.haveacount')}} </strong> <a href="{{url('/login')}}" class="sign-up"> {{Lang::get('main.signin')}} </a></p>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>