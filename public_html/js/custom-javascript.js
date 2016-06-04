$(document).ready(function(){

	/********************************************
	 * Swap out navbar classes 
	 * for home and content pages
	 ********************************************/
	if($('body').hasClass('home')) {
		
		/* check body tag for home page class, add navbar-inverse class */
		$('.navbar').addClass('navbar-inverse');
		
		/* on home page, swap out classes on scroll > 50 */
		$(window).on('scroll', function() {

			if($(window).scrollTop() > 50) {
				$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
				console.log("foo");
			}

			if($(window).scrollTop() <= 50) {
				$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
				console.log("foo");
			}

		});
	}

	if($('body').hasClass('content')) {
		$('.navbar').addClass('navbar-default');
	}



});