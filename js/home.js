$(document).ready(function(){
	$('.back-to-top').fadeOut().hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.back-to-top').fadeIn();
		} else {
			$('.back-to-top').fadeOut();
		}
	});

$('.back-to-top').click(function(){
	$('html').animate({scrollTop: 0}, 500);
});

$(".calcular").click(function(){
	var nota1 = parseFloat($('#nota1').val());
	var nota2 = parseFloat($('#nota2').val());
	var nota3 = parseFloat($('#nota3').val());
	var resultado = Math.round(parseFloat((nota1 + nota2 + nota3) / 3)*100)/100;
	$('.media-final').text(resultado);
	$('.mensagem').fadeIn(1000);
	$('.assinatura').fadeIn(1000);
});
function openCity(event, cityName) {
  // Declare all variables
	var i, tabcontent, tablinks;
	// Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
// Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
  	tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
// Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";

}
});
