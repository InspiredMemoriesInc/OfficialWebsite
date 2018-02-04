/*
	Project Name : Mitri Events
	
	-- Google Map
	-- Slider Content
	
	## Document Scroll		
		
	## Document Ready
		-- Scrolling Navigation
		-- Find all anchors
		-- Add Easing Effect
		-- Responsive Caret
		-- Remove p empty tag for Shortcode
		-- Expanding Search
		-- ToolTip Toggle
		-- Howwecan Section
		-- Team Section
		-- Introduction Section
		-- Schedule Section
		-- Testimonial Section
		-- CountDown
		-- Contact Map
		-- Quick Contact Form

	## Window Load
		-- Site Loader
*/

(function($) {

	"use strict"	
	
	/* -- Google Map */
	function initialize(obj) {
		var lat = $('#'+obj).attr("data-lat");
        var lng = $('#'+obj).attr("data-lng");
		var contentString = $('#'+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = "images/marker.png";
		var zoomLevel = parseInt($('#'+obj).attr("data-zoom") ,10);		
		var styles = [{"featureType":"landscape","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":" "},{"saturation":" "}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":" "},{"saturation":" "}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);	
		
		map.mapTypes.set("map_style", styledMap);
		map.setMapTypeId("map_style");
		
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});      
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, "click", function() {
			infowindow.open(map,marker);
		});	
	}
	
	/* -- Slider Content */
	function slider_content() {
		var s_height = $(".slider-section").height();
		$(".slider-section .slider-content-box").css( "height", s_height ).delay( 2000 ).fadeIn();
	}
	
	
	/* ## Document scroll() - Scroll */
	$( document ).on("scroll",function()
	{
		var scroll	=	$(window).scrollTop();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$(".menu-block").addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".menu-block").removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$(".menu-block").removeClass("navbar-fixed-top animated fadeInDown");
		} 	

		if ($(this).scrollTop() >= 50)
		{			
			$("#back-to-top").fadeIn(200);    /* Fade in the arrow */
		}
		else
		{
			$("#back-to-top").fadeOut(200);   /* Else fade out the arrow */
		}
	});
		
	/* ## Document Ready - Handler for ready() called */
	$(document).on("ready",function() {
		
		/* -- Scrolling Navigation */
		var scroll	=	$(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/*** set sticky menu ***/
		if( scroll >= height -500 )
		{
			$(".menu-block").addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".menu-block").removeClass("navbar-fixed-top");
		}
		else
		{
			$(".menu-block").removeClass("navbar-fixed-top");
		} /* set sticky menu - end */
		
		/* local url of page (minus any hash, but including any potential query string) */
		var url = location.href.replace(/#.*/,'');

		/* -- Find all anchors */
		$("#navbar").find("a[href]").each(function(i,a) {

			var $a = $(a);
			var href = $a.attr("href");

			/* check is anchor href starts with page's URI */
			if ( href.indexOf(url+'#') == 0 ) {

				/* remove URI from href */
				href = href.replace(url,'');

				/* update anchors HREF with new one */
				$a.attr("href",href);
			}
		});

		/* -- Add Easing Effect on Section Scroll */
		$('.navbar-nav li a[href*=#]:not([href=#]), .site-logo a[href*=#]:not([href=#])').on('click', function() {

		   if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

				if (target.length) {
					$('html, body').animate( { scrollTop: target.offset().top - 83 }, 1000, 'easeInOutExpo' );
					return false;
				}
			}
		});	
		
		/* -- Responsive Caret */
		$(".ddl-switch").on("click", function() {

			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* -- Remove p empty tag for Shortcode */
		$( "p" ).each(function() {
			var $this = $( this );
				if( $this.html().replace(/\s|&nbsp;/g, '').length == 0) {
				$this.remove();
			}
		});
		
		/* -- Expanding Search */
		new UISearch( document.getElementById( "sb-search" ) );
		
		/* -- ToolTip Toggle */
		$('[data-toggle="tooltip"]').tooltip({placement:"bottom"});				
		
		/* -- Howwecan Section */
		function howwecan_section(){			
			var width	=	$(window).width();			
			if( width <= 480 ){
				$('.howwecan-right .nav-tabs li > a').on('click', function() {
					$('html, body').animate({ scrollTop: $(".tab-content").offset().top - 125}, 2000 );
				});
			}
		}
		
		/* -- Team Section */
		if( $(".team-section").length ) {			
			$("#team-carousel").lightSlider({
				gallery: true,
				loop: true,
				item: 1,
				vertical: true,
				autoWidth: false,
				controls: false,
				enableDrag: false,
				verticalHeight: 674,
				vThumbWidth: 85,
				vThumbHeight: 85,
				thumbMargin: 20,
				thumbItem: 4
			});			
		}
				
		/* -- Introduction Section */
		if( $(".introduction-carousel").length ) {
			$(".introduction-carousel").owlCarousel({
				loop: true,
				margin: 0 ,
				nav: false,
				dots: false,
				smartSpeed: 200,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					640:{

						items: 2
					},
					992:{
						items: 3
					}
				}

			});
		}
		
		/* -- Schedule Section  */
		if($(".schedule-accordion").length){
			
			$(".panel-default .panel-title a").on( "click", function(){				
				$('.panel-default').addClass('intro');
				return false;
			});
		}		
		
		/* -- Testimonial Section */		
		if( $(".testimonial-block").length ) {
			$(".testimonial-carousel-left,.testimonial-carousel-right").owlCarousel({
				loop: true,
				margin: 0 ,
				nav: false,
				dots: false,
				autoplay: true,
				responsive:{
					0:{
						items: 1
					},
					640:{

						items: 1
					},
					992:{
						items: 1
					}
				}
			});
		}
		
		slider_content();
		howwecan_section();
			
		/* -- CountDown */		
		var ele_id = 0;
		$( "[id*='clock-']" ).each(function () { 
			ele_id = $(this).attr('id').split("-")[1];
			var cnt_date = $(this).attr("data-date");
			$("[id*='clock-"+ele_id+"']").countdown(cnt_date, function(event) {
				var $this = $(this).html(event.strftime(''    
				+ '<p>%D <span>Days</span></p>'
				+ '<p>%H <span>Hours</span></p>'
				+ '<p>%M <span>Mins</span></p>'
				+ '<p>%S <span>Secs</span></p>'));
		    });
		});
		
		/* -- Contact Map */
		if($("#map-canvas-contact").length==1){
			initialize("map-canvas-contact");
		}
		
		/* -- Quick Contact Form */
		$( "#btn_submit" ).on( "click", function(event) {
		  event.preventDefault();
		  var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");						
						$("#input_email").val("");						
						$("#input_phone").val("");						
						$("#textarea_message").val("");
						$("#alert-msg").show();				
					}			
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(textStatus);
				}
			});
			return false;
			$("#contact-form").attr("action", "saveQuery").submit();
		});
		
	});	/* -- Document Ready /- */
	
	$(window).on( "resize", function () {
		var width	=	$(window).width();
		
		slider_content()
		
		/* -- Howwecan Section */
		if($(".howwecan_section").length) {
			howwecan_section()
		}
	});
		
	/* ## Window Load - Handler for load() called */
	$(window).on("load",function() {
		/* -- Site Loader */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});

})(jQuery);