!function() {
    "use strict";
    var mobileMenuOutsideClick = function() {
            $(document).click(function(e) {
                var container = $("#zenc-offcanvas, .js-zenc-nav-toggle");
                container.is(e.target) || 0 !== container.has(e.target).length || ($(".js-zenc-nav-toggle").addClass(""), $("body").hasClass("offcanvas") && ($("body").removeClass("offcanvas"), $(".js-zenc-nav-toggle").removeClass("active")))
            })
        },
        offcanvasMenu = function() {
            $("#page").prepend('<div id="zenc-offcanvas" />'), $("#page").prepend('<a href="#" class="js-zenc-nav-toggle zenc-nav-toggle "><i></i></a>');
            var clone1 = $(".menu-1 > ul").clone();
            $("#zenc-offcanvas").append(clone1);
            var clone2 = $(".menu-2 > ul").clone();
            $("#zenc-offcanvas").append(clone2), $("#zenc-offcanvas .has-dropdown").addClass("offcanvas-has-dropdown"), $("#zenc-offcanvas").find("li").removeClass("has-dropdown"), $(".offcanvas-has-dropdown").mouseenter(function() {
                $(this).addClass("active").find("ul").slideDown(500, "easeOutExpo")
            }).mouseleave(function() {
                $(this).removeClass("active").find("ul").slideUp(500, "easeOutExpo")
            }), $(window).resize(function() {
                $("body").hasClass("offcanvas") && ($("body").removeClass("offcanvas"), $(".js-zenc-nav-toggle").removeClass("active"))
            })
        },
        burgerMenu = function() {
            $("body").on("click", ".js-zenc-nav-toggle", function(event) {
                var $this = $(this);
                $("body").hasClass("overflow offcanvas") ? $("body").removeClass("overflow offcanvas") : $("body").addClass("overflow offcanvas"), $this.toggleClass("active"), event.preventDefault()
            })
        },
        contentWayPoint = function() {
            var i = 0;
            $(".animate-box").waypoint(function(direction) {
                "down" !== direction || $(this.element).hasClass("animated-fast") || (i++, $(this.element).addClass("item-animate"), setTimeout(function() {
                    $("body .animate-box.item-animate").each(function(k) {
                        var el = $(this);
                        setTimeout(function() {
                            var effect = el.data("animate-effect");
                            "fadeIn" === effect ? el.addClass("fadeIn animated-fast") : "fadeInLeft" === effect ? el.addClass("fadeInLeft animated-fast") : "fadeInRight" === effect ? el.addClass("fadeInRight animated-fast") : el.addClass("fadeInUp animated-fast"), el.removeClass("item-animate")
                        }, 50 * k, "easeInOutExpo")
                    })
                }, 100))
            }, {
                offset: "85%"
            })
        },
        changeWayPoint = function() {
            var i = 0;
            $(".animate-change").waypoint(function(direction) {
                "down" !== direction || $(this.element).hasClass("animated-fast") || (i++, $(this.element).addClass("item-animate"), setTimeout(function() {
                    $("body .animate-change.item-animate").each(function(k) {
                        var el = $(this);
                        setTimeout(function() {
                            el.addClass("changed animated-fast"), el.removeClass("item-animate")
                        }, 100 * k, "easeInOutExpo")
                    })
                }, 100))
            }, {
                offset: "85%"
            })
        },
        dropdown = function() {
            $(".has-dropdown").mouseenter(function() {
                $(this).find(".dropdown").css("display", "block").addClass("animated-fast fadeInUpMenu")
            }).mouseleave(function() {
                $(this).find(".dropdown").css("display", "none").removeClass("animated-fast fadeInUpMenu")
            })
        },
        owlCarousel = function() {
            var owl = $(".owl-carousel-carousel");
            owl.owlCarousel({
                items: 3,
                loop: !0,
                margin: 40,
                nav: !0,
                dots: !0,
                navText: ["<i class='ti-arrow-left owl-direction'></i>", "<i class='ti-arrow-right owl-direction'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1e3: {
                        items: 3
                    }
                }
            }), (owl = $(".owl-carousel-fullwidth")).owlCarousel({
                items: 1,
                loop: !0,
                margin: 20,
                nav: !0,
                dots: !0,
                smartSpeed: 800,
                autoHeight: !0,
                navText: ["<i class='ti-arrow-left owl-direction'></i>", "<i class='ti-arrow-right owl-direction'></i>"]
            })
        },
        tabs = function() {
            $(".zenc-tab-content-wrap").css("height", 0);
            var autoHeight = function() {
                setTimeout(function() {
                    var tabContentWrap = $(".zenc-tab-content-wrap"),
                        tabHeight = $(".zenc-tab-nav").outerHeight(),
                        formActiveHeight = $(".tab-content.active").outerHeight(),
                        totalHeight = parseInt(tabHeight + formActiveHeight + 90);
                    tabContentWrap.css("height", totalHeight), $(window).resize(function() {
                        var tabContentWrap = $(".zenc-tab-content-wrap"),
                            tabHeight = $(".zenc-tab-nav").outerHeight(),
                            formActiveHeight = $(".tab-content.active").outerHeight(),
                            totalHeight = parseInt(tabHeight + formActiveHeight + 90);
                        tabContentWrap.css("height", totalHeight)
                    })
                }, 100)
            };
            autoHeight(), $(".zenc-tab-nav a").on("click", function(event) {
                var $this = $(this),
                    tab = $this.data("tab");
                $(".tab-content").addClass("animated-fast fadeOutDown"), $(".tab-content").removeClass("active"), $(".zenc-tab-nav li").removeClass("active"), $this.closest("li").addClass("active"), $this.closest(".zenc-tabs").find('.tab-content[data-tab-content="' + tab + '"]').removeClass("animated-fast fadeOutDown").addClass("animated-fast active fadeIn"), autoHeight(), event.preventDefault()
            })
        },
        goToTop = function() {
            $(".js-gotop").on("click", function(event) {
                return event.preventDefault(), $("html, body").animate({
                    scrollTop: $("html").offset().top
                }, 500, "easeInOutExpo"), !1
            }), $(window).scroll(function() {
                $(window).scrollTop() > 200 ? $(".js-top").addClass("active") : $(".js-top").removeClass("active")
            })
        },
        loaderPage = function() {
            $(".zenc-loader").fadeOut("slow")
        },
        counter = function() {
            $(".js-counter").countTo({
                formatter: function(value, options) {
                    return value.toFixed(options.decimals)
                }
            })
        },
        counterWayPoint = function() {
            $("#zenc-counter").length > 0 && $("#zenc-counter").waypoint(function(direction) {
                "down" !== direction || $(this.element).hasClass("animated") || (setTimeout(counter, 400), $(this.element).addClass("animated"))
            }, {
                offset: "90%"
            })
        },
        contactForm = function() {
            $("#contactForm").length > 0 && $("#contactForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: !0,
                        email: !0
                    },
                    message: {
                        required: !0,
                        minlength: 5
                    }
                },
                messages: {
                    name: "Please enter your name",
                    email: "Please enter a valid email address",
                    message: "Please enter a message"
                },
                submitHandler: function(form) {
                    var $submit = $(".submitting");
                    $.ajax({
                        type: "POST",
                        url: "php/sendEmail.php",
                        data: $(form).serialize(),
                        beforeSend: function() {
                            $submit.css("display", "block").text("Submitting...")
                        },
                        success: function(msg) {
                            "OK" == msg ? ($("#form-message-warning").hide(), setTimeout(function() {
                                $("#contactForm").fadeOut()
                            }, 1e3), setTimeout(function() {
                                $("#form-message-success").fadeIn()
                            }, 1400)) : ($("#form-message-warning").html(msg), $("#form-message-warning").fadeIn(), $submit.css("display", "none"))
                        },
                        error: function() {
                            $("#form-message-warning").html("Something went wrong. Please try again."), $("#form-message-warning").fadeIn(), $submit.css("display", "none")
                        }
                    })
                }
            })
        };
    $(function() {
        mobileMenuOutsideClick(), offcanvasMenu(), burgerMenu(), contentWayPoint(), dropdown(), owlCarousel(), tabs(), goToTop(), loaderPage(), counterWayPoint(), changeWayPoint(), contactForm()
    })
}();