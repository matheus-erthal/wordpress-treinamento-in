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

/* accordion avisos

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
