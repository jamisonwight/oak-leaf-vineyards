jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove();// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>");}else{jQuery(this).wrap("<div class='responsive-embed'/>");}});});



/*
Insert Custom JS Below
*/
jQuery(document).ready(function($){
// Navigation Open/Close & OffCanvas Controls

	var clickEvent = (function() {
	  if ('ontouchstart' in document.documentElement === true)
	    return 'touchstart';
	  else
	    return 'click';
	})();
	
	  $('[data-curtain-menu-button]').click(function(){
	    $('body').toggleClass('curtain-menu-open');
	  })
	  $('.offcanvas-trigger').click(function(){
	    $('#nav-icon').toggleClass('open');
	  })
	  $(function () {
	  if ($('.offcanvas-trigger').attr('aria-expanded') === "true"){
	    $('#nav-icon').toggleClass('open');
	    $('.off-canvas-content').toggleClass('is-open-right has-transition-push has-position-right');
	  }
	});
	$('.off-canvas a').on('click', function() {
	    $('.off-canvas').foundation('close');
	    $('#nav-icon').toggleClass('open');
	    $('.off-canvas-content').removeClass('is-open-right has-transition-push has-position-right');
	});
	$('.js-off-canvas-overlay').on('click', function() {
	    $('#nav-icon').toggleClass('open');
	    $('.off-canvas-content').removeClass('is-open-right has-transition-push has-position-right');
	});
	$('.offcanvas-trigger').click(function(){
	  $('.off-canvas-content').addClass('is-open-right has-transition-push has-position-right');
	});

});


