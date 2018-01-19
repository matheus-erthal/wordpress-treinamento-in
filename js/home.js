$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#topo').fadeIn();
            } else {
                $('#topo').fadeOut();
            }
        });
        $('#topo').click(function(){
        $('html').animate({scrollTop: 0}, 500);
    })
});
