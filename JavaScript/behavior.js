scrollBoolean = 0;
$(document).ready(function()
{
  scrollAux = $(".top").height();
  $(window).scroll(function()
  {
    if($(window).scrollTop()>$(".top").height())
    {
      if (scrollBoolean == 0)
      {
        $(".top").fadeOut();
        window.setTimeout(function(){
          $(".hiddentop").slideDown(400);
        }, 500);
        scrollBoolean = 1;
      }
    }
    if(($(window).scrollTop()<20) && ($(".hiddentop").height() == scrollAux))
    {
      if (scrollBoolean == 1)
      {
        $(".hiddentop").slideUp(100).finish();
        window.setTimeout(function(){
          $(".top").fadeIn(600);
        }, 100);
        scrollBoolean = 0;
      }
    }
  });
  $("html").click(function(){
    console.log($(".hiddentop").height() + "   " + $(window).scrollTop() + "   " + scrollAux+ "   " + scrollBoolean);
  });
});
