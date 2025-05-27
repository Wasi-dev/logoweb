let ip, ip_value;
$(document).ready(function() {
    $("#custom_carousel").on("slide.bs.carousel", function(t) {
        $("#custom_carousel .controls li a.active").removeClass("active"), $("#custom_carousel .controls li a:eq(" + $(t.relatedTarget).index() + ")").addClass("active")
    }), $("li:first-child").addClass("first"), $("li:last-child").addClass("last"), $('[href="#"]').attr("href", "javascript:;"), $(".menu-Bar").click(function() {
        $(this).toggleClass("open"), $(".menuWrap").toggleClass("open"), $("body").toggleClass("ovr-hiddn"), $("body").toggleClass("overflw")
    });
    var t = $(".tabspack");
    $(".tabspack").find("a").length, t.find(".active").innerWidth(), $(".packagesSec .selector").css({
        left: "0px",
        width: "279px"
    }), $(".tabspack").on("click", "a", function(t) {
        t.preventDefault(), $(".tabspack a").removeClass("active"), $(this).addClass("active");
        var a = $(this).innerWidth(),
            e = $(this).position();
        $(".selector").css({
            left: e.left + "px",
            width: a + "px"
        })
    }), $(".tabs2").on("click", "a", function(t) {
        t.preventDefault(), $(".tabs2 a").removeClass("active"), $(this).addClass("active");
        var a = $(this).innerWidth(),
            e = $(this).position();
        $(".selector2").css({
            left: e.left + "px",
            width: a + "px"
        })
    })
}), $(window).on("load", function() {
    var t = window.location.href.substr(window.location.href.lastIndexOf("https://infinixdesigns.com/") + 1);
    $("ul.menu li a").each(function() {
        $(this).attr("href") == t && ($(this).removeClass("active"), $(this).closest("li").addClass("active"), $("ul.menu li.first").removeClass("active"))
    })
}), $("#phone-country,#phone-coun").intlTelInput({
    geoIpLookup: function(t) {
        $.get("https://ipinfo.io/", function() {}, "jsonp").always(function(a) {
            var e = a && a.country ? a.country : "";
            t(e), ip = a.ip
        })
    },
    initialCountry: "auto",
    nationalMode: !0,
    separateDialCode: !0
});
var countrycode = "";
setTimeout(function() {
    var t = (countrycode = $(".selected-dial-code").text()).split("+");
    $('input[name="pc"]').val("+" + t[1]), $('input[name="cip"]').val(ip), $('input[name="ctry"]').val($(".country-list .country.active .country-name").text())
}, 3e3), $("body").delegate(".country", "click", function() {
    $('input[name="pc"]').val($(this).find(".dial-code").text()), $('input[name="cip"]').val(ip), $('input[name="ctry"]').val($(this).closest("form").find(".country-list .country.active .country-name").text())
}), $("[data-targetit]").on("click", function() {
    $(this).parent().siblings().children().removeClass("current"), $(this).addClass("current");
    var t = $(this).data("targetit");
    $("." + t).siblings(".my-tab").removeClass("tab-view"), $("." + t).addClass("tab-view")
}), $(".toggle1").click(function() {
    $(".sidebar-contact1").toggleClass("active"), $(".sidebar-contact1").hasClass("active") ? $(".overlay").css("display", "block") : $(".overlay").css("display", "none")
}), $(".close").click(function() {
    $(".sidebar-contact1").removeClass("active"), $(".overlay").css("display", "none")
}), $("[data-targetit]").on("click", function() {
    $(this).siblings().removeClass("current"), $(this).addClass("current");
    var t = $(this).data("targetit");
    $("." + t).siblings('[class^="tabs"]').removeClass("current"), $("." + t).addClass("current"), $(".slick-slider").slick("setPosition", 0)
}), $(document).ready(function() {
    $("a.hk_load").click(function() {
        $(".hk_hide").show("slow")
    })
}), $(".hk_load").click(function() {
    $(".hk_load").hide()
});

$('.pkg_btn').click(function() { var gettitle = $(this).attr('data-sku');$(".pkg_nme").val(gettitle);console.log(gettitle);});

$(document).ready(function () {
    $('#staticBackdrop').modal('show');
});