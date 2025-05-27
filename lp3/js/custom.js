$('[data-targetit]').on('click', function() {
    $(this).siblings().removeClass('current');
    $(this).addClass('current');
    var target = $(this).data('targetit');
    // console.log(target);
    $('.' + target).siblings('[class^="tabs"]').removeClass('current');
    $('.' + target).addClass('current');
    $('.slick-slider').slick('setPosition', 0);

});

// tabing

$('[data-targetit-package]').on('click', function(e) {
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
    var target = $(this).data('targetit-package');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).fadeIn();
});

$('.clientSlider').slick({
    dots: false,
    arrows: true,
    centerMode: true,
    centerPadding: '0px',
    autoplay: false,
    margin: '20px',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('#test_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    center:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


 $(".ind-slider").slick({
   dots: !1,
   arrows: !0,
   autoplay: !0,
   arrows: !1,
   slidesToShow: 4,
   slidesToScroll: 1,
   centerMode: !0,
   centerPadding: "15px",
   speed: 500,
   autoplaySpeed: 1e3,
   responsive: [{
      breakpoint: 1400,
      settings: {
         slidesToShow: 3,
         slidesToScroll: 1
      }
   }, {
      breakpoint: 1100,
      settings: {
         slidesToShow: 3,
         slidesToScroll: 1
      }
   }, {
      breakpoint: 900,
      settings: {
         slidesToShow: 2,
         slidesToScroll: 1
      }
   }, {
      breakpoint: 500,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: !1
      }
   }, {
      breakpoint: 480,
      settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: !1
      }
   }]
}),
  
  
  $(".tbing li").click(function(){
    var a = $(this).attr("data-target");
        
     $(".tbing li").removeClass("current");
     $(this).addClass("current");
     
     $("#"+a).fadeIn("slow").siblings(".mytabs").hide();
     return false;
  })
  let num = document.querySelectorAll(".counterup");
let numArray = Array.from(num);

numArray.map((item) => {
    let count = 0;
    function counterup() {
        count++;
        item.innerHTML = count;

        if (count == item.dataset.number) {
            clearInterval(stop);
        }
    }

    let stop = setInterval(function () {
        counterup();
    }, 100);
});
$('.pkg_btn').click(function(){var gettitle=$(this).attr('data-sku');$(".pkg_nme").val(gettitle);console.log(gettitle)})

$(document).ready(function () {
    $('#Mymodal').modal('show');
});