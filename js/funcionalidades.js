//jQuery(document).ready(function($)
//{
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
	//Quano clicarmos em "Quem somos", a página dá scroll para esta section
	(function($)
	{
		$('.menu-nav li a').click( function()
		{
			var idItem = $(this).attr("href");
			

			if(idItem == '#Quem_somos')
			{
				$('html, body').animate({scrollTop: ($('.quem-somos').offset().top-120)}, 500);
			}
			else
			{
				if(idItem == '#Nossos_projetos')
				{
					$('html, body').animate({scrollTop: ($('.projetos').offset().top-10)}, 500);
				}
				else
				{
					if(idItem == '#Nosso_proposito')
					{
						$('html, body').animate({scrollTop: ($('.proposito').offset().top-100)}, 500);						
					}
					else
					{
						if(idItem == '#Contato')
						{
							$('html, body').animate({scrollTop: ($('.contato').offset().top-100)}, 500);
						}
					}				
				}			
			}
		});
	})(jQuery);	
	
//$(window).height() para ver o tamanho da tela	 
});

