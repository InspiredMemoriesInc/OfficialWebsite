(function($) {
    "use strict";
    //portfolio close button 
    $('.close').on('click', function(event) {
        $('.worksajax .content').slideUp('slow', function() {
            $('.worksajax .content').remove();
        });
        return false;
    });

    $(".worksajax .slider").owlCarousel({
        navigation: true,
        navigationText: ['<span class="slide-nav inleft"><i class="fa fa-caret-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-caret-right"></i></span >'],
        slideSpeed: 800,
        autoPlay: true,
        pagination: true,
        paginationSpeed: 800,
        singleItem: true,
        transitionStyle: "fade"
    });

    // portfolio Video responsive
    $(".worksajax .video").fitVids();

    // script popup image
    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    //easing portfolio scrolling
    $('.close').on('click', function(event) {
        var $anchor = $('#works');
		var menuheigt = $( ".for-sticky" ).height();
        $('html, body').stop().animate({
            scrollTop: $($anchor).offset().top - menuheigt
        }, 1000, 'linear');
        event.preventDefault();
    });


})(jQuery);