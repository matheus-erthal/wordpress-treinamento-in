var scrollBoolean = 0;
var i = 0;

$(document).ready(function(){
  //Comando de clickar no botao dá scroll. Ela leva em consideração se você está no topo e, portanto, o display do top entra ou não no calculo do scrollTop
  $("li a").click(function(){
    event.preventDefault();
    if($(".top").css("position") == "relative"){
      $("html, body").animate({scrollTop:$("."+$(this).attr("href")).offset().top - $(".top").height()} , 500);
    }
    else{
      $("html, body").animate({scrollTop:$("."+$(this).attr("href")).offset().top} , 500);
    }
  });

  //Efeito de esconder o top em caso de scroll

  $(window).scroll(function(){
    $(".top").css("position", "fixed");
    $(".top").stop("True").slideUp("slow", "swing");
    $(".top").css("opacity", "1");

    if ($(window).scrollTop()==0){
      $(".top").stop("True").slideDown("slow", "swing");
      $(".top").css("position", "relative")
    }
  });

  //efeito de mostrar  o top em caso de mover o mouse para perto do topo, handleMouseMove é para evitar que vários comandos entrem pra queue ao mesmo tempo
  $("body").mousemove(function (e) {
    if (enableHandler && $(".top").queue()<1) {
      handleMouseMove(e);
      enableHandler = false;
    }
  });
  timer = window.setInterval(function(){
    enableHandler = true;
  }, 300);

  function handleMouseMove(){
    if (event.pageY - $(this).scrollTop() < $(".top").height() * 1.5){
     $(".top").stop("True", "True").slideDown("slow", "swing");
     if ($(window).scrollTop()!=0){
       $(".top").css("opacity", "0.5");
     }
  }}
  $("#googlemaps").click(function(){
    $(".fale-conosco").fadeOut("slow");
    $("#googlemaps").css("transition", "0.3")
    $("#googlemaps").css("opacity", "1")
  });
  $(document).click(function(event) {
    if(!$(event.target).closest('#googlemaps').length) {
      $(".fale-conosco").fadeIn("slow");
      $("#googlemaps").css("transition", "0.3")
      $("#googlemaps").css("opacity", "0.5")
    }
  });
  
});
