<?php


/*template name: home template*/

get_header();

?>

<?php if (have_posts()): ?>
<?php while(have_posts()): the_post(); ?>


<div class="teste">

<div class="background"	style="background-image:url('<?= get_template_directory_uri(); ?>/img/html_background.jpeg');">
	<section class="descricao">

		<div class="descricao-container">
			<div class="descricao-texto">
				<h1>IN Junior soluções em TI</h1>
				<p>Desenvolvimento de Sites, Sistemas Web e Aplicativos para pequenas e médias empresas. Nunca foi tão fácil encontrar soluções em TI para alavancar o seu negócio.</p>
			</div>
			<img src="<?= get_template_directory_uri(); ?>/img/lobo_foto.png" alt="lobo da In Junior">
		</div>
	</section>
</div>

<section class="quem-somos">
  <h2>Quem Somos</h2>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php the_field('imagem_1'); ?>" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php the_field('imagem_2'); ?>" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php the_field('imagem_3'); ?>" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php the_field('imagem_4'); ?>" alt="Fourth slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
  </div>
	
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>	

</section>

<section class="projetos">
	<h2>Nossos projetos</h2>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php the_field('imagem_5'); ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="<?php the_field('imagem_6'); ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="<?php the_field('imagem_7'); ?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img src="<?php the_field('imagem_8'); ?>" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<p>Ut enim ad minim veniam, quis nostrud exercitation.</p>

</section>

<section class="proposito"> 
	<div class="proposito-container">
		<h2>Nosso propósito</h2>

		<div class="proposito-item">
			<h3>Missão</h3>
			<p>Satisfazer o cliente através da entrega constante de projetos por profissionais realizados.</p>
		</div>
		<div class="proposito-item">
			<h3>Valores</h3>
			<p>Sorriso no rosto :D <br> Trabalhar em alcateia <br>
			Proatividade <br> Codar por amor <br> Espírito Alpha</p>
		</div>
		<div class="proposito-item">
			<h3>Visão</h3>
			<p>Ser a EJ de TI com maior entrega de projetos de qualidade.</p>
		</div>
	</div>

</section>


<section class="contato">
	<h2>Contato</h2>

	<img src="<?= get_template_directory_uri(); ?>/fotos/cont.jpg" alt="contato: fale conosco.">

	<div class="contato-mailer">
		<form id="contact_form" action="#" method="post" enctype="multipart/form-data">
			<div class="row">
				<label for="name">Nome:</label><br>
				<input id="name" class="input" name="name" type="text" placeholder="Nome"/>
			</div>
		
			<div class="row">
				<label for="email">Email:</label><br>
				<input id="email" class="input" name="email" type="text" placeholder="Email"/>
			</div>
	
			<div class="row">
				<label for="message">Mensagem:</label><br/>
				<textarea id="message" class="input" name="message" rows="10" cols="30" placeholder="Mensagem"></textarea><br>
			</div>

			<p><input id="submit_button" class="botao" type="submit" value="enviar"/></p>

		</form>           

	</div>
</section>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer();?>
</div>

