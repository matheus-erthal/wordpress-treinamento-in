// slider
$(document).ready(function(){	
	
	function slider(sliderName, velocidade) {
	  var sliderClass = '.' + sliderName,
			  activeClass = 'active',
			  rotate = setInterval(rotateSlide, velocidade);
  
	  $(sliderClass + ' > :first').addClass(activeClass);
  
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
  
  //fadein
  
	  $("#img1").mouseover(function(){
		  $("#botao1").addClass("aparecer");
	  });

	  $("#img2").mouseover(function(){
		$("#botao2").addClass("aparecer");
	});
  });

	


