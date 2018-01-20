$(document).ready(function(){
	console.log("batata")
     $(window).scroll(function(){
            if ($(this).scrollTop() > 500) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        $('.back-to-top').click(function(){
          $('html').animate({scrollTop: 0}, 500);
    })
	
	
    $(".calcular").click(function(){
        var nota1 = parseFloat($('#nota1').val());
        var nota2 = parseFloat($('#nota2').val());
        var nota3 = parseFloat($('#nota3').val());
        var resultado = parseFloat((nota1 + nota2 + nota3) / 3);
		$('.media-final').text(resultado);
		$('.mensagem').fadeIn(1000);
		$('.assinatura').fadeIn(1000);
    });

});
