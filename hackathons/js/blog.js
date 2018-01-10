(function($) {
    "use strict";

    //preloader
    $(window).on("load", function() { // makes sure the whole site is loaded
        $("#status").fadeOut(); // will first fade out the loading animation
        $("#preloader").delay(450).fadeOut("slow"); // will fade out the white DIV that covers the website.

    });



    //create menu for tablet/mobile
    $(".menu-box .navigation").clone(false).find("ul,li").removeAttr("id").remove(".sub-menu").appendTo($(".mobile-menu"));
    $(".mobile-menu .sub-menu").remove();
    $('.mobile-menu').on('show.bs.collapse', function() {
        $('body').on('click', function() {
            $('.mobile-menu').collapse('hide');
        })
    })

    //toggle menu
    $('.menu-btn').on('click', function() {
        $('.mobile-menu').collapse({
            toggle: false
        });
    })

    //blog team setting
    $(".blog-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        autoplay: true,
        autoHeight: true,
        pagination: false,
        paginationSpeed: 300,
        singleItem: true,
        mouseDrag: true,
        navigationText: ['<span class="slide-nav inleft"><i class="fa fa-caret-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-caret-right"></i></span >'],
        stopOnHover: false,
        transitionStyle: "fade"
    });

    // script popup image
    $('.popup-img').magnificPopup({
        type: 'image'
    });


    // Video responsive
    $("body").fitVids();

})(jQuery);