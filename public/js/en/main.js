

$("#img_01").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#img_01").bind("click", function(e) {  
  var ez =   $('#gal1').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
$("#img_02").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#img_02").bind("click", function(e) {  
  var ez =   $('#gal1').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
$("#img_03").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#img_03").bind("click", function(e) {  
  var ez =   $('#gal1').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
$("#img_04").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#img_04").bind("click", function(e) {  
  var ez =   $('#gal1').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});











  // import Swiper from 'swiper/swiper-bundle.esm.js';
  // import 'swiper/swiper-bundle.css';
  var swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });

  $('.slider').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items: 1,
    margin: 30,
    stagePadding: 30,
    smartSpeed: 450
  });

  $(document).ready(function() {
  $('select').niceSelect();
});


  const targetDiv = document.getElementById("div-mob");
  const div = document.getElementById("btn-mob");
  div.onclick = function() {
    if (targetDiv.style.display !== "block") {
      targetDiv.style.display = "block";
    } else {
      targetDiv.style.display = "none";
    }
  };


$('.brands-carousel').owlCarousel({
  loop:true,
margin:5,
ltr:true,
autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
        },
        800:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }});
$('.tab-contents ').owlCarousel({
  autoplay:true,
  loop:true,
  margin:5,
  ltr:true,
   
  dots:true,
  slideTransition:'',
  autoplayTimeout:6500,
  autoplayHoverPause:true,
  autoplaySpeed:6500,
  responsiveClass:true,
 
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:true
        }

  }

});

$('.tests-carousel').owlCarousel({
  loop:true,
margin:5,
ltr:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
        },
        800:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }});
    var owl2 = $('.tests-carousel');

$('.owl-nexts').click(function () {

    owl2.trigger('next.owl.carousel');
});
$(".owl-prevs").click(function () {
    owl2.trigger('prev.owl.carousel');
});
    var owl3 = $('.related-carousel');

$('.owl-nexts').click(function () {

    owl3.trigger('next.owl.carousel');
});
$(".owl-prevs").click(function () {
    owl3.trigger('prev.owl.carousel');
});
$('.related-carousel').owlCarousel({
  autoplay:true,
  loop:true,
  margin:5,
  dots:false,
  ltr:true,
  slideTransition:'linear',
  autoplayTimeout:4500,
  autoplayHoverPause:true,
  autoplaySpeed:4500,
  responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,

        },
        600: {
            items: 1,
            nav: false,
            dots: true,

        },
        1000: {
            items: 3,
            nav: false,
            dots: true,

        }
    }})
    $(document).ready(function() {

var sync1 = $("#sync1");
var sync2 = $("#sync2");
var slidesPerPage = 3; //globaly define number of elements per page
var syncedSecondary = true;

sync1.owlCarousel({
    items: 1,
    ltr:true,
    slideSpeed: 2000,
    nav: true,
    autoplay: false, 
    dots: true,
    loop: true,
    responsiveRefreshRate: 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
}).on('changed.owl.carousel', syncPosition);

sync2
    .on('initialized.owl.carousel', function() {
        sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
        items: slidesPerPage,
        dots: true,
        nav: true,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate: 100
    }).on('changed.owl.carousel', syncPosition2);

function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;

    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - (el.item.count / 2) - .5);

    if (current < 0) {
        current = count;
    }
    if (current > count) {
        current = 0;
    }

    //end block

    sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
        sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
        sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
}

function syncPosition2(el) {
    if (syncedSecondary) {
        var number = el.item.index;
        sync1.data('owl.carousel').to(number, 100, true);
    }
}


});




$( '.owl-filt-bar' ).on( 'click', '.item', function() {

var $item = $(this);
var filter = $item.data( 'owl-filter' )

owl.owlcarousel2_filter( filter );

} )
 

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();



  $('.nav a').click(function (e) {
    $(this).tab('show');
  
  var tabContent = '#tabContent' + this.id; 
  
  $('#tabContent1').hide();
  $('#tabContent2').hide();
  $('#tabContent3').hide();
  $(tabContent).show();
})



  $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
 



  // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});







var owl1 = $('#ourNews');

$('.owl-next').click(function () {

    owl1.trigger('next.owl.carousel');
});
$(".owl-prev").click(function () {
    owl1.trigger('prev.owl.carousel');
});
$('#ourNews').owlCarousel({
    loop: false,
    margin: 40,
    ltr:true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,

        },
        600: {
            items: 1,
            nav: false,
            dots: true,

        },
        1000: {
            items: 3,
            nav: false,
            dots: true,

        },

    }
});
// var myCarousel = document.querySelector('#myCarousel')
// var carousel = new bootstrap.Carousel(myCarousel, {
//   interval: 2000,
//   wrap: false
// })




  var owl3 = $('.owl-cates');

$('.owl-next').click(function () {

    owl3.trigger('next.owl.carousel');
});
$(".owl-prev").click(function () {
    owl3.trigger('prev.owl.carousel');
});
  var owl = $('.owl-cates').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$( '.owl-brs-filt' ).on( 'click', '.item', function() {

var $item = $(this);
var filter = $item.data( 'owl-filter' )

owl.owlcarousel2_filter( filter );

} )
function showProjectsbyCat( cat ){
  if ( cat == 'all'){
    $('#projects-hidden .project').each(function(){
       var owl   = $(".owl-carousel").data('owlCarousel');
       elem      = $(this).parent().html();

       owl.addItem( elem );
       $(this).parent().remove();
    });
  }else{
    $('#projects-hidden .project.'+ cat).each(function(){
       var owl   = $(".owl-carousel").data('owlCarousel');
       elem      = $(this).parent().html();

       owl.addItem( elem );
       $(this).parent().remove();
    });

    $('#projects-carousel .project:not(.project.'+ cat + ')').each(function(){
       var owl   = $(".owl-carousel").data('owlCarousel');
       targetPos = $(this).parent().index();
       elem      = $(this).parent();

       $( elem ).clone().appendTo( $('#projects-hidden') );
       owl.removeItem(targetPos);
    });
  }
}

$(window).load(function(){
  
    //Click event for filters
    $('#project-terms a').click(function(e){
        e.preventDefault();
        $('#project-terms a').removeClass('active');

        cat = $(this).attr('ID');
        $(this).addClass('active');
        showProjectsbyCat( cat );
        //alert('filtering'+ cat);
    });
  
   //Initialize owl carousel
    $("#projects-carousel").owlCarousel({
 
    // Most important owl features
    items : 3
    }
  );
});
