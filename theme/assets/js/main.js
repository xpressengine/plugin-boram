$(function() {
	$('.owl-spot').owlCarousel({
		nav: true,
		loop: true,
		items: 1,
		stagePadding: 200,
		responsive: {
			0: {
				stagePadding: 0
			},
			768: {
				stagePadding: 0
			},
			900: {
				stagePadding: 80
			},
			1068: {
				stagePadding: 100
			}
		}
	});

	$('.owl-bottom').owlCarousel({
		loop: true,
		items: 1,
	});

	$(".owl-spot").hover(function(){
		$('.owl-nav').animate({opacity:1},250);
	}, function(){
		$('.owl-nav').animate({opacity:0},250);
	});

});