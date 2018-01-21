$(document).ready( function()
{

	$(window).scroll(function() 
	{
		var windowTop = $(this).scrollTop();
		if(windowTop > $('.descricao').offset().top - 200)
		{
			$('.descricao-texto').addClass('aparecer');
			$('.descricao img').addClass('aparecer');
		}
		else
		{
			$('.descricao-texto').removeClass('aparecer');
			$('.descricao img').removeClass('aparecer');
		}

		
	});
	
	 
});
