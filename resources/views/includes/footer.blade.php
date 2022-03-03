<section class="sub-sec">
    <div class="subscribe-atheer">
        <div class="container">
            <div class="row">

                <div class="subscribe-item">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <h4>{{Lang::get('main.subscribetext')}}  </h4>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-6">
                      <div class="subscribe-area">
                        <input type="email" name="" id="" placeholder=" {{lang::get('main.typeyouremailhere')}} ">
                        <button type="submit" class=" btn-pink">{{lang::get('main.subscribebtn')}} </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class=" logo-footer">
          <div class="logo-navs">
            <a href="{{url('/')}}"> <img src="{{ asset('img/logo.png') }}" width="150"> </a>
          </div>
         <p>{{lang::get('main.lorem2')}} </p>
         <h5>{{lang::get('main.followus')}} </h5>
         <ul class="foot-logo1">

            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          </ul>



       <h5> {{lang::get('main.paymentmethod')}} </h5>
           <ul class="foot-logo1">
         <li><a href="#">  <img src="{{ asset('img/icon/mastro.png') }}" width="60"></a></li>
         <li><a href="#">  <img src="{{ asset('img/icon/mastercard.png') }}" width="60"></a></li>
         <li><a href="#">  <img src="{{ asset('img/icon/paypal.svg') }}" width="60"></a></li>
         <li><a href="#">  <img src="{{ asset('img/icon/skrill.png') }}" width="60"></a></li>
         <li><a href="#">  <img src="{{ asset('img/icon/visaa.png') }}" width="60"></a></li>

       </ul>

          </div>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12">
        <h5><strong>{{lang::get('main.quicklink')}}  </strong></h5>
          <ul class="foot-logo2">

            <li><a href="{{url('/aboutus')}}">{{lang::get('main.aboutus')}}   </a></li>
            <li><a href="{{url('/contactus')}}">{{lang::get('main.contactus')}}   </a></li>

            <li><a href="{{url('/term')}}">{{lang::get('main.termsandcondition')}}     </a></li>
            <li><a href="{{url('/privacypolicy')}}">{{lang::get('main.privacypolicy')}}   </a></li>
            <li><a href="{{url('/faq')}}">{{lang::get('main.faq')}} </a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12">

        <h5> <strong>{{lang::get('main.customerarea')}}   </strong></h5>
          <ul class="foot-logo2">

            <li><a href="{{url('/profile')}}">{{lang::get('main.myaccount')}}     </a></li>
            <li><a href="{{url('/profile')}}">{{lang::get('main.orders')}}   </a></li>
            <li><a href="{{url('/profile')}}">{{lang::get('main.trackinglist')}} </a></li>
           </ul>
        </div>
        <div class="col-lg-3  col-md-12 col-sm-12">
        <h5> <strong>{{lang::get('main.contact')}}  </strong></h5>
          <ul class="foot-logo2">
            <li><a href="#"><i class="fas fa-phone-alt"></i>  00123456789</a></li>
            <li><a href="#"> <i class="far fa-envelope"></i> shahi@support.com</a></li>
            <li><a href="#"><i class="fas fa-map-marker-alt"></i>{{lang::get('main.ammanjordan')}}  </a></li>

          </ul>
          <div class="foot-logo2">
          <a href="#"> <img src="{{ asset('img/app/app1.png') }}" width="150"> </a>

          <a href="#"> <img src="{{ asset('img/app/app2.png') }}" width="150"> </a>
          </div>


        </div>


      </div>
      <!-- <div class="row">
        <div class="foot-sub">
        <div class="col-lg-6  col-md-6 col-sm-3">
        <div class="left-me">


          <h5>Payment Methods</h5>
              <ul class="foot-logos">
            <li><a href="#">  <img src="{{ asset('img/icon/mastro.png') }}" width="60"></a></li>
            <li><a href="#">  <img src="{{ asset('img/icon/mastercard.png') }}" width="60"></a></li>
            <li><a href="#">  <img src="{{ asset('img/icon/paypal.svg') }}" width="60"></a></li>
            <li><a href="#">  <img src="{{ asset('img/icon/skrill.png') }}" width="60"></a></li>
            <li><a href="#">  <img src="{{ asset('img/icon/visaa.png') }}" width="60"></a></li>

          </ul>
          </div>
          </div>
          <div class="right-me">
          <div class="col-lg-6  col-md-6 col-sm-3">
       <div class="lol">
          <a href="#"> <img src="{{ asset('img/app/app1.png') }}" width="150"> </a>

          <a href="#"> <img src="{{ asset('img/app/app2.png') }}" width="150"> </a>
          </div>
          </div>
        </div>
        </div>
      </div> -->
      </div>
      <div class="container">
      <div class="row">
        <div class="copy-right">
          <p> <a href="http://fasttechno.net" target="_blank">Fast Techno</a>   - © {{lang::get('main.allrightreserv')}} </p>
        </div>
      </div>
    </div>
  </div>
</footer>







<!-- <script src="{{ asset('js/bootstrap.js')  }}"></script>
<script src="{{ asset('js/bootstrap.min.js')  }}"></script> -->
<!-- <script src="{{ asset('js/jquery.js')  }}"></script>
<script src="{{ asset('js/jquery.min.js')  }}"></script> -->
<!-- <script src="{{ asset('js/owl-carousel.min.js')  }}"></script> -->
<!-- <script src="{{ asset('js/jquery.validate.min8162.js')  }}"></script> -->


<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
<script src="{{ asset('js/nice-select.min.js')  }}"></script>
<script src=""></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <script src="{{ asset('js/main.js')  }}"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js" integrity="sha512-egjn0g4nyX3074dTJbuzFHdPDu17RP8ElcYpQuQbl9VUu6RKQaqlX4dJJ/l7Z5fFniqLSOJgytwP0FiKf4MEfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/'.app()->getLocale().'/main.js')  }}"></script>


<script type="text/javascript">
    let addBtn = document.querySelector('#add');
    let subBtn = document.querySelector('#sub');
    let qty = document.querySelector('#qtyBox');


    addBtn.addEventListener('click',()=>{
        qty.value = parseInt(qty.value) + 1;
    });
    subBtn.addEventListener('click',()=>{
        if( qty.value <= 0) {
            qty.value =0;

        }
        else{
            qty.value =parseInt(qty.value) - 1;
        }
    });

</script>
<script type="text/javascript">


    $(function() {
        var $image = $('.product-image .image');
        var currImage;
        $('.product-thumbnails img').on('click', function() {
            $image.css('background-image', 'url(' + $(this).attr("src") + ')');
            currImage = "";
        });
        $('.product-thumbnails img').hover(function() {
            currImage = $image.css('background-image');
            $image.css('background-image', 'url(' + $(this).attr("src") + ')');
        }, function() {
            if (currImage !== "") {
                $image.css('background-image', currImage);
            }
        });

        // Zoom in on mouseover and zoom out on mouseout
        $('.product-image .image')
            .on('mouseover', function() {
                $(this).css('transform', 'scale(1.5)');
            })
            .on('mouseout', function() {
                $(this).css('transform', 'scale(1.5)');
            })
            .on('mousemove', function(e){
                $(this).css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
            });
    });
</script>











</body>
</html>
