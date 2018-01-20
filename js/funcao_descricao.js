$(document).ready( function()
{
	//Conteúdo de "Descrição" aparecer na tela
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
