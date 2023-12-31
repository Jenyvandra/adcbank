// Main Navigation

( function( $ ) {
	$( '.nav-toggle' ).on( 'click', function ( event ) {
	  event.preventDefault();
	  event.stopPropagation();
	  $( 'body' ).toggleClass( 'menu-open' );
	});
	$( '.site-header .main-menu ul li' ).each( function ( e ) {
	  if ( $( this ).hasClass( 'has-dropdown' ) ) {
		$( this ).prepend( '<i class="arrow-down"></i>' );
	  }
	});
	$( '.site-header .main-menu ul li .arrow-down' ).on( 'click', function ( event ) {
	  event.preventDefault();
	  event.stopPropagation();
	  if ($( this ).parent( 'li' ).hasClass( 'active-submenu' ) ) {
		$( this ).parent( 'li' ).toggleClass( 'active-submenu' );
	  } else {
		$(".site-header .main-menu ul li").removeClass("active-submenu");
		$( this ).parent( 'li' ).addClass( 'active-submenu' );
	  }
	});
} )( jQuery );


// Top Search
$(document).ready(function(){
    $(".search-button").click(function(){
      	$(".search-section").toggle();
    });
	$(".search-button-mobile").click(function(){
		$(".search-section-mobile").toggle();
	});
});


// Accordian
$(document).ready(function() {
	$(".accordion-set > a").on("click", function() {
	  if ($(this).hasClass("active")) {
		$(this).removeClass("active");
		$(this)
		  .siblings(".accordion-content")
		  .slideUp(200);
		$(".accordion-set > a i")
		  .removeClass("fa-angle-up")
		  .addClass("fa-angle-down");
	  } else {
		$(".accordion-set > a i")
		  .removeClass("fa-angle-up")
		  .addClass("fa-angle-down");
		$(this)
		  .find("i")
		  .removeClass("fa-angle-down")
		  .addClass("fa-angle-up");
		$(".accordion-set > a").removeClass("active");
		$(this).addClass("active");
		$(".accordion-content").slideUp(200);
		$(this)
		  .siblings(".accordion-content")
		  .slideDown(200);
	  }
	});

	$(".accordion-set-one > a").on("click", function() {
		if ($(this).hasClass("active")) {
		  $(this).removeClass("active");
		  $(this)
			.siblings(".accordion-content-one")
			.slideUp(200);
		  $(".accordion-set-one > a i")
			.removeClass("fa-minus")
			.addClass("fa-plus");
		} else {
		  $(".accordion-set-one > a i")
			.removeClass("fa-minus")
			.addClass("fa-plus");
		  $(this)
			.find("i")
			.removeClass("fa-plus")
			.addClass("fa-minus");
		  $(".accordion-set-one > a").removeClass("active");
		  $(this).addClass("active");
		  $(".accordion-content-one").slideUp(200);
		  $(this)
			.siblings(".accordion-content-one")
			.slideDown(200);
		}
	});

});



// Slick - Slider
$(document).on('ready', function () {
    $(".hero-slider").slick({
        dots: true,
        infinite: true,
		arrows: false,
        slidesToShow: 1
    });
	$(".event-slider").slick({
        dots: true,
        infinite: true,
		arrows: false,
        slidesToShow: 1
    });
});



// Scroll To Top
$(document).ready(function(){
	"use strict";
  var offSetTop = 100;
  var $scrollToTopButton = $('.scrollToTop');
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > offSetTop) {
			$scrollToTopButton.fadeIn();
		} else {
			$scrollToTopButton.fadeOut();
		}
	});
	
	//Click event to scroll to top
	$scrollToTopButton.click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

// Sticky Header
$(window).scroll(function() {
	if ($(this).scrollTop() > 1){  
		$('.site-header-wrap').addClass("sticky");
	  }
	  else{
		$('.site-header-wrap').removeClass("sticky");
	  }
});
// Tabs section
	$(document).ready(function(){
	// Show the first tab by default
	$('.tabs-stage .tabs-stage-inner').hide();
	$('.tabs-stage .tabs-stage-inner:first').show();
	$('.tabs-nav li:first').addClass('tab-active');

	// Change tab class and display content
	$('.tabs-nav a').on('click', function(event){
	  event.preventDefault();
	  $('.tabs-nav li').removeClass('tab-active');
	  $(this).parent().addClass('tab-active');
	  $('.tabs-stage .tabs-stage-inner').hide();
	  $($(this).attr('href')).show();
	});
});