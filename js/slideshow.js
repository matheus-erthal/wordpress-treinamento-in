// Slider
$(document).ready(function(){
  function slider(sliderName, velocidade) {
	var sliderClass = '.' + sliderName,
			activeClass = 'active',
			rotate = setInterval(rotateSlide, velocidade);

	$(sliderClass + ' > :first').addClass(activeClass);

	$(sliderClass).hover(function(){
		clearInterval(rotate);
	}, function() {
		rotate = setInterval(rotateSlide, velocidade);
	});

	function rotateSlide() {
		var activeSlide = $(sliderClass + ' > .' + activeClass),
				nextSlide = activeSlide.next();

		if(nextSlide.length == 0) {
			nextSlide = $(sliderClass + ' > :first');
		}
		activeSlide.removeClass(activeClass);
		nextSlide.addClass(activeClass);
	}
}

slider('intro', 2500);
})
