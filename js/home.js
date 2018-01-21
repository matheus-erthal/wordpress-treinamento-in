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
		var nota1 = parseFloat($('#nota1').val().replace(",","."));
		var nota2 = parseFloat($('#nota2').val().replace(",","."));
		var nota3 = parseFloat($('#nota3').val().replace(",","."));
		if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3)){
			$('.media-final').text("Preencha corretamene os campos");
		} else if(nota1 < 0 || nota1 > 10 || nota2 < 0 || nota2 > 10 || nota3 < 0 || nota3 > 10){
			$('.media-final').text("As notas devem estar todas entre zero e dez.");
		} else{
			var resultado = Math.round(parseFloat((nota1 + nota2 + nota3) / 3)*100)/100;
			$('.media-final').text("Sua média é " + resultado + ".");
		}
		$('.mensagem').hide();
		$('.assinatura').hide();
		$('.mensagem').fadeIn(1000);
		$('.assinatura').fadeIn(1000);
	});

//accordion dos avisos
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].addEventListener("click", function() {
	        /* Toggle between adding and removing the "active" class,
	        to highlight the button that controls the panel */
	        this.classList.toggle("active");

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

/* accordion avisos */

	var acc = $(".painel-botao");
	var i;

	for(i = 0; i < acc.length; i++){
		acc[i].addEventListener("click", function(){
			var idItem = $(this).attr("href");
			$(idItem).removeClass(".active");

			this.classList.toggle(".active");
			var $painel = this.nextElementSibling;

			if($painel.style.display === "block"){
				$(idItem).removeClass(".active");
				$painel.style.display = "none";
			} else {
				$painel.style.display = "block";
			}
		});
	};
	**/
	$('.painel').click(function(){
		$('.painel-container').slideUp();
		$(this).find(".painel-container").slideToggle();

	});
});
