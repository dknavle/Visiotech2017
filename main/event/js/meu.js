// click function to stay still (to work on smart phones)
$('.flip-container').click(function() {
	$(this).toggleClass("hover");
	$(this).find('.back').toggleClass("still");
});

// show flip effect when laoded
$('.product-2').removeClass("hover").delay(800).queue( function(next) {
	$(this).addClass("hover").delay(2000).queue(function(next) {
		$(this).removeClass("hover");
		next();
	});
	next();
});