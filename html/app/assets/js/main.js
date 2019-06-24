(function($) {

	var height = $('h1.start-text').innerHeight();
	$('.content.secoend').css('padding-top', height);
	$('.content.last').css('padding-top', height);
	  // Banner slider
	  $('.slider').slick({
	  	dots: true,
	  	infinite: true,
	  	speed: 1500,
	  	autoplay: true,
	  	arrows: true,
	  	prevArrow: '<div class="prev"><span>previous</span></div>',
	  	nextArrow: '<div class="next"><span>Next</span></div>',
	  	slidesToShow: 1.1,
	  	slidesToScroll: 1,
	  	responsive: [{
	  		breakpoint: 993,
	  		settings: {
	  			arrows: true,
	  			dots: true,
	  		}
	  	},
	  	{
	  		breakpoint: 768,
	  		settings: {
	  			arrows: false,
	  			dots: true,
	  			slidesToShow: 1,
	  		}
	  	} ]
	  });

	})(jQuery);
