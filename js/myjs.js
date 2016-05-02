$(document).ready(function() {
	$('section#screenshots a').on('click', function() {
			$('div#modal img').attr('src', $(this).attr('data-image-url') ); 
	});

// editied with the help of http://kylewbanks.com/blog/Detecting-Scroll-Events-And-Getting-Scroll-Offset-With-jQuery   
//    also used "inpsect element" for naming convention
//    
    
	var nav = $('.navbar-fixed-top');
	var distance = $('.navbar-fixed-top').offset();

	if (distance.top >= 300 ) {
		nav.addClass('effect');
	}

	$(window).scroll(function() {       /*adding an event*/
		var scroll = $(window).scrollTop();

		if (scroll >= 300) {
			nav.addClass('effect');
		} else {
			nav.removeClass('effect');
		}
	});




//PAGE SCROLL
//init - initialises the scroll
//adjust the speed of the scrolls key : value


smoothScroll.init({
    speed: 500,         
    easing: 'linear',
    offset:0
    
    
});      
    
});