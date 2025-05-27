!function(o) {
    o.fn.ClassyCountdown=function(e, n) {
        var t,
        s,
        a,
        l,
        i,
        f=o(this),
        g=!1,
        r= {
            end:void 0,
            now:o.now(),
            labels:!0,
            labelsOptions: {
                lang: {
                    days: "Days", hours: "Hours", minutes: "Minutes", seconds: "Seconds"
                }
                ,
                style:"font-size: 0.5em;"
            }
            ,
            style: {
                element:"",
                labels:!1,
                textResponsive:.5,
                days: {
                    gauge: {
                        thickness: .02, bgColor: "rgba(0, 0, 0, 0)", fgColor: "rgba(0, 0, 0, 1)", lineCap: "butt"
                    }
                    ,
                    textCSS:""
                }
                ,
                hours: {
                    gauge: {
                        thickness: .02, bgColor: "rgba(0, 0, 0, 0)", fgColor: "rgba(0, 0, 0, 1)", lineCap: "butt"
                    }
                    ,
                    textCSS:""
                }
                ,
                minutes: {
                    gauge: {
                        thickness: .02, bgColor: "rgba(0, 0, 0, 0)", fgColor: "rgba(0, 0, 0, 1)", lineCap: "butt"
                    }
                    ,
                    textCSS:""
                }
                ,
                seconds: {
                    gauge: {
                        thickness: .02, bgColor: "rgba(0, 0, 0, 0)", fgColor: "rgba(0, 0, 0, 1)", lineCap: "butt"
                    }
                    ,
                    textCSS:""
                }
            }
            ,
            onEndCallback:function() {}
        }
        ;
        function C() {
            t=Math.floor(i/86400),
            s=Math.floor(i%86400/3600),
            a=Math.floor(i%86400%3600/60),
            l=Math.floor(i%86400%3600%60%60)
        }
        function u() {
            i--,
            C(),
            i<=0&&(g||(g=!0, r.onEndCallback()), t=0, s=0, a=0, l=0),
            f.find(".ClassyCountdown-days input").val(365-t).trigger("change"),
            f.find(".ClassyCountdown-hours input").val(24-s).trigger("change"),
            f.find(".ClassyCountdown-minutes input").val(60-a).trigger("change"),
            f.find(".ClassyCountdown-seconds input").val(60-l).trigger("change"),
            f.find(".ClassyCountdown-days .ClassyCountdown-value > div").html(t),
            f.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html(s),
            f.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html(a),
            f.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html(l)
        }
        function d() {
            f.find(".ClassyCountdown-wrapper > div").each(function() {
                o(this).css("height", o(this).width()+"px")
            }
            ),
            r.style.textResponsive&&f.find(".ClassyCountdown-value").css("font-size", Math.floor(f.find("> div").eq(0).width()*r.style.textResponsive/10)+"px"),
            f.find(".ClassyCountdown-value").each(function() {
                o(this).css("margin-top", Math.floor(0-parseInt(o(this).height())/2)+"px")
            }
            ),
            f.find(".ClassyCountdown-days input").trigger("change"),
            f.find(".ClassyCountdown-hours input").trigger("change"),
            f.find(".ClassyCountdown-minutes input").trigger("change"),
            f.find(".ClassyCountdown-seconds input").trigger("change")
        }
        e.theme&&(r=o.extend(!0, r, function(o) {
            switch(o) {
                case"flat-colors":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#1abc9c"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#2980b9"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#8e44ad"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#f39c12"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"flat-colors-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#1abc9c"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#2980b9"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#8e44ad"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#f39c12"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"flat-colors-very-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .12, bgColor: "rgba(0,0,0,0.05)", fgColor: "#1abc9c"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .12, bgColor: "rgba(0,0,0,0.05)", fgColor: "#2980b9"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .12, bgColor: "rgba(0,0,0,0.05)", fgColor: "#8e44ad"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .12, bgColor: "rgba(0,0,0,0.05)", fgColor: "#f39c12"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"flat-colors-black":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#1abc9c", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#2980b9", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#8e44ad", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#f39c12", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"black":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .01, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"black-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"black-very-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .17, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .17, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .17, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .17, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"black-black":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .25, bgColor: "rgba(0,0,0,0.05)", fgColor: "#222", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#34495e;"
                        }
                    }
                }
                ;
                case"white":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .03, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                    }
                }
                ;
                case"white-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .06, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .06, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .06, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .06, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                    }
                }
                ;
                case"white-very-wide":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .16, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .16, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .16, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .16, bgColor: "rgba(255,255,255,0.05)", fgColor: "#fff"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                    }
                }
                ;
                case"white-black":return {
                    labels:!0, style: {
                        element:"", textResponsive:.5, days: {
                            gauge: {
                                thickness: .25, bgColor: "#fff", fgColor: "#fff", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , hours: {
                            gauge: {
                                thickness: .25, bgColor: "#fff", fgColor: "#fff", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , minutes: {
                            gauge: {
                                thickness: .25, bgColor: "#fff", fgColor: "#fff", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                        , seconds: {
                            gauge: {
                                thickness: .25, bgColor: "#fff", fgColor: "#fff", lineCap: "round"
                            }
                            , textCSS:"font-family: Poppins,sans-serif;font-weight:300;color:#fff;"
                        }
                    }
                }
            }
        }
        (e.theme))),
        r=o.extend(!0, r, e),
        function() {
            f.append('<div class="ClassyCountdown-wrapper"><div class="ClassyCountdown-days"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-hours"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-minutes"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-seconds"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div></div>'),
            f.find(".ClassyCountdown-days input").knob(o.extend( {
                width: "100%", displayInput: !1, readOnly: !0, max: 365
            }
            , r.style.days.gauge)),
            f.find(".ClassyCountdown-hours input").knob(o.extend( {
                width: "100%", displayInput: !1, readOnly: !0, max: 24
            }
            , r.style.hours.gauge)),
            f.find(".ClassyCountdown-minutes input").knob(o.extend( {
                width: "100%", displayInput: !1, readOnly: !0, max: 60
            }
            , r.style.minutes.gauge)),
            f.find(".ClassyCountdown-seconds input").knob(o.extend( {
                width: "100%", displayInput: !1, readOnly: !0, max: 60
            }
            , r.style.seconds.gauge)),
            f.find(".ClassyCountdown-wrapper > div").attr("style", r.style.element),
            f.find(".ClassyCountdown-days .ClassyCountdown-value").attr("style", r.style.days.textCSS),
            f.find(".ClassyCountdown-hours .ClassyCountdown-value").attr("style", r.style.hours.textCSS),
            f.find(".ClassyCountdown-minutes .ClassyCountdown-value").attr("style", r.style.minutes.textCSS),
            f.find(".ClassyCountdown-seconds .ClassyCountdown-value").attr("style", r.style.seconds.textCSS),
            f.find(".ClassyCountdown-value").each(function() {
                o(this).css("margin-top", Math.floor(0-parseInt(o(this).height())/2)+"px")
            }
            ),
            r.labels&&(f.find(".ClassyCountdown-days .ClassyCountdown-value > span").html(r.labelsOptions.lang.days), f.find(".ClassyCountdown-hours .ClassyCountdown-value > span").html(r.labelsOptions.lang.hours), f.find(".ClassyCountdown-minutes .ClassyCountdown-value > span").html(r.labelsOptions.lang.minutes), f.find(".ClassyCountdown-seconds .ClassyCountdown-value > span").html(r.labelsOptions.lang.seconds), f.find(".ClassyCountdown-value > span").attr("style", r.labelsOptions.style));
            i=r.end-r.now,
            C()
        }
        (),
        u(),
        setInterval(u, 1e3),
        function() {
            f.find(".ClassyCountdown-wrapper > div").each(function() {
                o(this).css("height", o(this).width()+"px")
            }
            ),
            r.style.textResponsive&&(f.find(".ClassyCountdown-value").css("font-size", Math.floor(f.find("> div").eq(0).width()*r.style.textResponsive/10)+"px"), f.find(".ClassyCountdown-value").each(function() {
                o(this).css("margin-top", Math.floor(0-parseInt(o(this).height())/2)+"px")
            }
            ));
            o(window).trigger("resize"),
            o(window).resize(o.throttle(50, d))
        }
        ()
    }
}

(jQuery);