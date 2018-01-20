<?php


/*template name: home template*/

get_header();

?>

<?php if (have_posts()): ?>
<?php while(have_posts()): the_post(); ?>


<div class="teste">


<section class="descricao">
	<div class="descricao-container">
		<div class="descricao-texto">
			<h2>IN Junior soluções em TI</h2>
			<p>Desenvolvimento de Sites, Sistemas Web e Aplicativos para pequenas e médias empresas. Nunca foi tão fácil encontrar soluções em TI para alavancar o seu negócio.</p>
		</div>
		<img src="<?= get_template_directory_uri(); ?>/img/lobo_foto.png" alt="lobo da In Junior">
	</div>
</section>

<section class="quem-somos">
  <h2>Quem Somos</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


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
	<p>Ut enim ad minim veniam, quis nostrud exercitation.</p>	


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

</section>

<section class="proposito">
	<h2>Nosso propósito</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
</section>

<section class="contato">
	<h2>Contato</h2>
	<img src="img/contato.png" alt="contato">
	<div class="contato-mailer">
		
	</div>
</section>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer();?>
</div>

