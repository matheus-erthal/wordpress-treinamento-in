$(document).ready( function()
{

	$(window).scroll(function() 
	{
		var windowTop = $(this).scrollTop();
		if(windowTop > $('.descricao').offset().top - 200)
		{
			$('.descricao').addClass('aparecer');
		}
		else
		{
			$('.descricao').removeClass('aparecer');
		}

		
	});
	
	 
});
