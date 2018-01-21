//jQuery(document).ready(function($)
//{
$(document).ready( function()
{
	var local_atual = window.location.pathname;
	//alert(caminho);

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
	//Quano clicarmos em "Quem somos", a página dá scroll para esta section
	(function($)
	{
		$('.menu-nav li a').click( function()
		{
			var idItem = $(this).attr("href");
			

			if(idItem == '#Quem_somos')
			{
				if(local_atual == '/wordpress/index.php/nova-pagina-de-testes/')
				{
					$('html, body').animate({scrollTop: ($('.quem-somos').offset().top-120)}, 500);
				}
				else
				{
					window.location.href="/wordpress/index.php/nova-pagina-de-testes/";	
					//$('html, body').animate({scrollTop: ($('.quem-somos').offset().top-120)}, 500);			
				}			
			}
			else
			{
				if(idItem == '#Nossos_projetos')
				{
					if(local_atual == '/wordpress/index.php/nova-pagina-de-testes/')
					{
						$('html, body').animate({scrollTop: ($('.projetos').offset().top-130)}, 500);
					}
					else
					{
						window.location.href="/wordpress/index.php/nova-pagina-de-testes/";	
						//$('html, body').animate({scrollTop: ($('.projetos').offset().top-130)}, 500);			
					}	
				}
				else
				{
					if(idItem == '#Nosso_proposito')
					{
						if(local_atual == '/wordpress/index.php/nova-pagina-de-testes/')
						{
							$('html, body').animate({scrollTop: ($('.proposito').offset().top-110)}, 500);
						}
						else
						{
							window.location.href="/wordpress/index.php/nova-pagina-de-testes/";	
							//$('html, body').animate({scrollTop: ($('.proposito').offset().top-110)}, 500);			
						}	
					}
					else
					{
						if(idItem == '#Contato')
						{
							if(local_atual == '/wordpress/index.php/nova-pagina-de-testes/')
							{
								$('html, body').animate({scrollTop: ($('.contato').offset().top-100)}, 500);
							}
							else
							{
								window.location.href="/wordpress/index.php/nova-pagina-de-testes/";	
								//$('html, body').animate({scrollTop: ($('.contato').offset().top-100)}, 500);			
							}	
						}
					}				
				}			
			}
		});
	})(jQuery);	
	
//$(window).height() para ver o tamanho da tela	 
});

