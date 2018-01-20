$(document).ready(function(){
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

    $("button").click(function(){
            var nota1 = parseFloat(document.getElementById('nota1').value);
            var nota2 = parseFloat(document.getElementById('nota2').value);
            var nota3 = parseFloat(document.getElementById('nota3').value);
            var resultado = parseFloat((nota1 + nota2 + nota3) / 3);
            document.getElementById('media').setAttribute("value", resultado);
        	});
});
