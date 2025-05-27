var _ouibounce=ouibounce(document.getElementById('ouibounce-modal'),{aggressive:!0,});$(document).ready(function(){$(".footer-vld-frm").validate();$(".validate-banner-frm").validate();$('.partnerslider').slick({infinite:!0,slidesToShow:5,slidesToScroll:1,autoplay:!0,dots:!1,prevArrow:!1,nextArrow:!1,autoplaySpeed:2000,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]});$(".testwraper").slick({dots:!1,arrows:!1,infinite:!0,slidesToShow:1,slidesToScroll:1,speed:500,autoplay:!0,autoplaySpeed:2000,fade:!0,cssEase:'linear',responsive:[{breakpoint:776,settings:{vertical:!1,arrows:!1}}]});$('.content-testimonial').owlCarousel({loop:!0,margin:10,nav:!1,dots:!0,autoplay:!0,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$('.portfolioslider').owlCarousel({loop:!0,margin:10,nav:!1,dots:!0,autoplay:!0,lazyLoad:!0,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$(function(){var selectedClass="";$(".fil-cat").click(function(){$(this).addClass('active-pf');selectedClass=$(this).attr("data-rel");$("#portfolio").fadeTo(100,0.1);$("#portfolio>div").not("."+selectedClass).fadeOut().removeClass('scale-anm');setTimeout(function(){$("."+selectedClass).fadeIn().addClass('scale-anm');$("#portfolio").fadeTo(300,1);$('.fil-cat').removeClass('active-pf')},300)})});$('.various').click(function(){var gettitle=$(this).attr('title');$('#popupform .popup-content').html(gettitle);var leadtittle=$(this).attr('title');$(".popupform .leadtittle").val(leadtittle);var leadprice=$(this).attr('name');$(".popupform .leadprice").val(leadprice)});$('.pkg_tablink li').click(function(){$('.pkg_tablink li').removeClass('current');$(this).addClass('current');var id=$(this).attr('data-pkg');$('.pkg_tab_custom .pkg_tab').removeClass('current')
    $('.'+id).addClass('current')});$('.intotabm li').click(function(){$('.intotabm li').removeClass('current');$(this).addClass('current');var id=$(this).attr('data-targetit');$('.intotab_custom .intotab').removeClass('current')
    $('.'+id).addClass('current')});var str=location.href.toLowerCase();$(".navbar-nav li a").each(function(){if(str.indexOf(this.href.toLowerCase())>-1){$("li.active").removeClass("active");$(this).parent().addClass("active")}});$('.customerslider').owlCarousel({loop:!0,margin:0,dots:!0,responsiveClass:!0,responsive:{0:{items:1,nav:!1},600:{items:1,nav:!1},1000:{items:1,nav:!1,loop:!1}}});$('[data-fancybox]').fancybox();$(".validate-popupform").validate();$('.contact-form').validate();$(".contactusform").validate();$(".validate-footer").validate();$(".contactusform-footer").validate()});$(".clickbutton").click(function(){$('.floatbutton').toggleClass("active");$('.crossplus').toggleClass("rotate")});$('.pkg_btn').click(function(){var gettitle=$(this).attr('data-sku');$(".pkg_nme").val(gettitle);console.log(gettitle)})

        document.addEventListener("DOMContentLoaded", function () {
            const forms = document.querySelectorAll("form");
        
            forms.forEach(form => {
                const inputs = form.querySelectorAll("input, textarea");
        
                form.addEventListener("submit", function (event) {
                    let isValid = true;
        
                    inputs.forEach(input => {
                        if (!input.checkValidity()) {
                            isValid = false;
                            input.reportValidity(); // Show tooltip error
                        } else {
                            input.setCustomValidity("");
                        }
                    });
        
                    // Google reCAPTCHA Validation
                    const recaptcha = form.querySelector(".g-recaptcha");
                    const recaptchaResponse = document.getElementById("g-recaptcha-response");
        
                    if (recaptcha && recaptchaResponse) {
                        if (!recaptchaResponse.value) {
                            isValid = false;
                            alert("Please complete the reCAPTCHA verification.");
                        }
                    }
        
                    if (!isValid) {
                        event.preventDefault(); // Stop form submission if invalid
                    }
                });
            });
        });
   window.addEventListener("load", function () {
    setTimeout(function () {
      $.fancybox.open({
        src: '#popupform',
        type: 'inline'
      });
    }, 1000);
  });
 