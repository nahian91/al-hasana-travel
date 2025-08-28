(function($) {
    "use strict";
  
    const $documentOn = $(document);
    const $windowOn = $(window);
  
    $documentOn.ready( function() {
  
      //>> Mobile Menu Js Start <<//
      $('#mobile-menu').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "1199",
        meanExpand: ['<i class="far fa-plus"></i>'],
    });

    $('#mobile-menus').meanmenu({
        meanMenuContainer: '.mobile-menus',
        meanScreenWidth: "1920",
        meanExpand: ['<i class="far fa-plus"></i>'],
    });
  
      //>> Sidebar Toggle Js Start <<//
      $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
        $(".offcanvas__info").removeClass("info-open");
        $(".offcanvas__overlay").removeClass("overlay-open");
      });
      $(".sidebar__toggle").on("click", function () {
        $(".offcanvas__info").addClass("info-open");
        $(".offcanvas__overlay").addClass("overlay-open");
      });
  
      //>> Body Overlay Js Start <<//
      $(".body-overlay").on("click", function () {
        $(".offcanvas__area").removeClass("offcanvas-opened");
        $(".df-search-area").removeClass("opened");
        $(".body-overlay").removeClass("opened");
      });
  
      //>> Sticky Header Js Start <<//
  
      $windowOn.on("scroll", function () {
        if ($(this).scrollTop() > 250) {
          $("#header-sticky").addClass("sticky");
        } else {
          $("#header-sticky").removeClass("sticky");
        }
      });      
      
      //>> Video Popup Start <<//
      $(".img-popup").magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });
  
      $(".img-popup2").magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });
  
      $(".video-popup").magnificPopup({
        type: "iframe",
        callbacks: {},
      });
  
      //>> Counterup Start <<//
      $(".count").counterUp({
        delay: 15,
        time: 4000,
      });
  
      //>> Wow Animation Start <<//
      new WOW().init();
  
       //>> Nice Select Start <<//
       if ($('.single-select').length) {
        $('.single-select').niceSelect();
    }

    //>> Testimonial Slider Start <<//
    if($('.testimonial-slider').length > 0) {
        const testimonialSlider = new Swiper(".testimonial-slider", {
            spaceBetween: 30,
            speed: 2000,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                prevEl: ".array-prevs",
                nextEl: ".array-nexts",
            },
            breakpoints: {
                1199: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
    }


    //>> Mouse Cursor Start <<//
    function mousecursor() {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
                t = document.querySelector(".cursor-outer");
            let n,
                i = 0,
                o = !1;
            (window.onmousemove = function(s) {
                o ||
                    (t.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (e.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (n = s.clientY),
                    (i = s.clientX);
            }),
            $("body").on("mouseenter", "a, .cursor-pointer", function() {
                    e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                }),
                $("body").on("mouseleave", "a, .cursor-pointer", function() {
                    ($(this).is("a") && $(this).closest(".cursor-pointer").length) ||
                    (e.classList.remove("cursor-hover"),
                        t.classList.remove("cursor-hover"));
                }),
                (e.style.visibility = "visible"),
                (t.style.visibility = "visible");
        }
    }
    $(function() {
        mousecursor();
    });

    //>> Back To Top Slider Start <<//
    $windowOn.on('scroll', function() {
        if ($(this).scrollTop() > 20) {
            $("#back-top").addClass("show");
        } else {
            $("#back-top").removeClass("show");
        }
    });
    
    $documentOn.on('click', '#back-top', function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
        
    }); // End Document Ready Function
      
      loader();
  
   
  
  })(jQuery); // End jQuery