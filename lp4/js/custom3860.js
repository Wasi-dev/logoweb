$(function() {
    var selectedClass = "";
    $(".fil-cat").click(function() {

        $(".portfolio_list ul li").removeClass('active');
        $(this).addClass('active');
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(100, 0.1);
        $("#portfolio .showing").not("." + selectedClass).fadeOut().removeClass('scale-anm');
        setTimeout(function() {
            $("." + selectedClass).fadeIn().addClass('scale-anm');
            $("#portfolio").fadeTo(800, 1);
        }, 300);

    });
});

$(document).ready(function() {


    $('#carousel').carousel();

    //bootstrap carousel plugin

    $('.carousel').carousel({

        interval: 5000,

        pause: ""

    });
  //   var owl = $('#testimonial');

  //   owl.owlCarousel({
  //       navigation: false,
  //       margin : 30,
		// loop:true,
		// autoPlay: 3000,
		// autoplayTimeout:1000,
  //       items : 3,
  //       itemsDesktop      : [1199,3],
  //       itemsDesktopSmall     : [979,2],
  //       itemsTablet       : [768,1],
  //       itemsMobile       : [479,1],
  //       pagination:true,
  //       animateIn: 'fadeIn',
  //       animateOut: 'fadeOut'
  //   });
	
	// var owl = $('#header-testimonial');

 //    owl.owlCarousel({
 //        navigation: false,
 //        margin : 30,
 //        loop:true,
 //        autoPlay: 3000,
 //        autoplayTimeout:1000,
 //        items : 1,
 //        itemsDesktop      : [1199,1],
 //        itemsDesktopSmall     : [979,1],
 //        itemsTablet       : [768,1],
 //        itemsMobile       : [479,1],
 //        pagination:true,
 //        animateIn: 'fadeIn',
 //        animateOut: 'fadeOut'
 //    });
    
    var owl = $('#logos-type');
	
	owl.owlCarousel({
        loop: false,
        slideSpeed : 1000,
		autoPlay: 3000,
        navigation: true,

        items : 1,
        itemsDesktop      : [1199,1],
        itemsDesktopSmall     : [979,1],
        itemsTablet       : [768,1],
        itemsMobile       : [479,1],
        pagination:true,
		dots: true
    });




$(document).ready(function() {

    $('.s-bar').hover(function(){
        $(this).stop(true,true).animate({right:'184px'}, 500, 'easeOutExpo');
        $('.side-bars').css('z-index','1004');
    }, function(){
        $(this).animate({right:'0px'}, 500, 'easeOutBounce');
        $('.side-bars').css('z-index','999');
    });

    $('.popup_open').click(function() {
        $('.popup-form').show(300).addClass('visibleit');
        $('.cus-overlay').fadeIn(300);
    })

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });


    $('.cus-overlay').click(function() {
        $(this).fadeOut(300);
        $('.popup-form').removeClass('visibleit');
        $('.popup-form').fadeOut();
        $('#popupformLead2').fadeOut();
        $('#ouibounce-modal').fadeOut(200);
        $('.floating-form-wrap').animate({'margin-right': '-584px'})
    })

    $('.floating-form-wrap .form-handle, #slideform').click(function() {
        if ($('.floating-form-wrap').css('margin-right') == '-584px') {
            $('.floating-form-wrap').animate({
                'margin-right': '0px'
            })
            $('.cus-overlay').fadeIn(300);
        } else {
            $('.floating-form-wrap').animate({
                'margin-right': '-584px'
            })
            $('.cus-overlay').fadeOut(300);
        }
    });

    $('.floating-banner').hover(function() {
        $('.floating-banner').stop(1, 1).animate({
            'margin-left': '0px'
        }, 200);
        $('.cus-overlay').stop(1, 1).fadeIn(200);
    }, function() {
        $('.floating-banner').animate({
            'margin-left': '-610px'
        }, 200);
        $('.cus-overlay').fadeOut(200);
    });

});

    // $(window).scroll(function(){
    //     var topPlusWindowSize = $(window).scrollTop()+ $( window ).height();
    //
    //     if( $('.floating-form-wrap')[0] && $('.side-bars')[0] ){
    //         var headerHeight = $( '.header-wrap' ).height()-140;
    //         if ( ( $(window).scrollTop() >= headerHeight  ) ){
    //             $('.floating-form-wrap, .side-bars').fadeIn( 300 );
    //             $('.floating-banner').fadeIn(300);
    //             $('.black-img').fadeIn(300);
    //         }
    //         else {
    //             $('.floating-form-wrap, .side-bars').fadeOut( 300 );
    //             $('.floating-banner').fadeOut(300);
    //             $('.black-img').fadeOut(300);
    //         }
    //     }
    // });//window scroll end
    // $(window).scroll(function () {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 200) {
    //         $('.floating-form-wrap, .side-bars').fadeIn(300);
    //     }
    //     if (scroll <= 200) {
    //         $('.floating-form-wrap, .side-bars').fadeOut(300);
    //         $('.cus-overlay').fadeOut(200);
    //     }
    // });

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 500) {
    $(".sticky-cta").addClass("fixed");
    $(".fixed-area").addClass("fixed");
  } else {
      $(".fixed-area").removeClass("fixed");
      $(".sticky-cta").removeClass("fixed");
  }
});

// countInnit
$("#countdown3").ClassyCountdown( {
    end:$.now()+10800, now:$.now(), labels:!0, style: {
        element:"", textResponsive:.5, days: {
            gauge: {
                thickness: .03, 
                bgColor: "#fff", 
                fgColor: "#ffd800",
                lineCap: 'round'
            }
            , textCSS:"font-family: Poppins,sans-serif; font-size:16px; font-weight:500; color:#fff;"
        }
        , hours: {
            gauge: {
                thickness: .20, 
                bgColor: "#fff", 
                fgColor: "#e22d50",
                lineCap: 'round'
            }
            , textCSS:"font-family: Poppins,sans-serif; font-size:16px; font-weight:500; color:#fff;"
        }
        , minutes: {
            gauge: {
                thickness: .20, 
                bgColor: "#fff", 
                fgColor: "#2db9e2",
                lineCap: 'round'
            }
            , textCSS:"font-family: Poppins,sans-serif; font-size:16px; font-weight:500; color:#fff;"
        }
        , seconds: {
            gauge: {
                thickness: .20, 
                bgColor: "#fff", 
                fgColor: "#f4ee1b",
                lineCap: 'round'
            }
            , textCSS:"font-family: Poppins,sans-serif; font-size:16px; font-weight:500; color:#fff;"
        }
    }
    , onEndCallback:function() {
        console.log("Time out!")
    }
});
$(document).ready(function(){
    $('.ClassyCountdown-hours .ClassyCountdown-value span').text("HRS");
    $('.ClassyCountdown-minutes .ClassyCountdown-value span').text("MINS");
    $('.ClassyCountdown-seconds .ClassyCountdown-value span').text("SECS")})
//End  countInnit


});



 $(document).ready(function(e) {
      
         $('#header-testimonial').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:true,
            items:1,
            responsive:{
               0:{
                  dots:false,
                  margin:0,
               },
               600:{
                  items:1,
                  dots:true
               },
               1000:{
                  items:1
               }
      
            }
         });
      
         $('#pricing-carosul').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      dots:false,
      responsive:{
         0:{
            items:1,
                  nav:false,
                  dots:true,
                  margin:0,
         },
         600:{
            items:2,
                  nav:false,
                  dots:true
         },
         1000:{
            items:3
         }
      
      }
      });
      
         $('#testimonial').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:false,
            responsive:{
               0:{
                  items:1,
                  dots:true
               },
               600:{
                  items:2,
                  dots:true
               },
               1000:{
                  items:3
               }
            }
         });
      
         var checkWidth = $(document).width();
         if(checkWidth <=767){
            $('#process-carosul').owlCarousel({
               dots:true,
               items:1,
                responsive:{
                  0:{
                     items:1,
                     dots:true
                  },
                  600:{
                     items:1,
                     dots:true
                  },
                  1000:{
                     items:3
                  }
               }
            });
            $('#combo-box').owlCarousel({
               dots:true,
               nav: false,
               items:1,
                responsive:{
                  0:{
                     items:1,
                     dots:true
                  },
                  600:{
                     items:1,
                     dots:true
                  },
                  1000:{
                     items:3
                  }
               }
            });
         }
      });

   $('.bxslider1').bxSlider({
      pagerCustom: '#bx-pager',
      auto:true,
      mode: 'vertical'
      });
      $(".number").on("keypress keyup blur",function (event) {
      $(this).val($(this).val().replace(/[^0-9\.]/g,''));
      if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
      event.preventDefault();
      }
      });
      $(".number").on("keypress keyup blur",function (event) {    
      $(this).val($(this).val().replace(/[^\d].+/, ""));
      if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
      }
      });
      $(function(){
      $('.scroll').slimScroll({
      height: '500px'
      });
      // $('.no-scroll').slimScroll({
      // height: '316px'
      // });
      });
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
      $(".side-bars-1").css("display", "block")
      } else {
      $(".side-bars-1").css("display", "none")
      }
      });
      var temp = true;
      $(".requestbar").click(function(){
      if (temp) {
      $('.request').css({"left": "-114px"});
      temp = !temp;
      }else{
      $('.request').css({"left": "173px"});
      temp = !temp;
      }
      });

      $('.pkg_btn').click(function(){var gettitle=$(this).attr('data-sku');$(".pkg_nme").val(gettitle);console.log(gettitle)})
   // Show popup after 3.4 seconds
  window.addEventListener("load", function () {
    setTimeout(function () {
      document.getElementById("popupformLead").style.display = "block";
    }, 400);
  });

  // Close popup function
  function closePopupForm() {
    document.getElementById("popupformLead").style.display = "none";
     function closePopupForm() {
    const popup = document.getElementById("popupformLead");
    const overlay = document.getElementById("overlay");

    if (popup && overlay) {
      popup.style.display = "none";
      overlay.style.display = "none";
    }
  }

  }
$(document).ready(function () {
  let lastLeft = null;

  function checkLeft() {
    const leftValue = parseInt($('.request').css('left'), 10);
    if (leftValue !== lastLeft) {
      lastLeft = leftValue;
      if (leftValue === -114) {
        $('.types-of-logo .nav-tabs > li > a').css('z-index', '0');
      } else {
        $('.types-of-logo .nav-tabs > li > a').css('z-index', '99999');
      }
    }
    requestAnimationFrame(checkLeft);
  }

  requestAnimationFrame(checkLeft);
});
