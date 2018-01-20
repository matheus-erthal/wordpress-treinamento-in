<?php
/* TEMPLATE NAME: Home Template */

get_header();

?>

	<header class="top">
		<div class="top-container">
			<a class="top-logo" href="#"><img src="<?= get_template_directory_uri(); ?>/img/logo-in-resized.png" alt="IN Junior"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#">Projetos</a></li>
					<li><a href="#">Nosso propósito</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</nav>
		</div>
	</header> 

	<section class="hiddentop">
		<div class="top-container">
			<a class="top-logo" href="#"><img src="<?= get_template_directory_uri(); ?>/img/logo-in-resized.png" alt="IN Junior"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#">Projetos</a></li>
					<li><a href="#">Nosso propósito</a></li>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</nav>
		</div>
	</section> 

	<section class="intro">
		<p> <?php the_field('texto_intro'); ?>  </p>
	</section>

	<section class="principal">
		<div class="quem-somos">
			<h2> Quem Somos </h2>
			<div class="wolf"> 
			<img src="<?= get_template_directory_uri(); ?>/img/lobo.png" alt="Lobo">
			</div>
			<p> <?php the_field('texto'); ?> </p>
		</div>
	</section>

	<section class="projetos">
		<div class="projects">
			<h2> Projetos </h2>
			<!-- <p>  <?php ?> </p>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
   					<div class="carousel-item active">
		    			<img src="<?php ; ?>">
   					</div>
			    	<div class="carousel-item">
				    	<img src="<?php ; ?>">
   					</div>
   					<div class="carousel-item">
    					<img src="<?phps ?>">
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
			</div> -->
		</div>
	</section>

	<section class="proposito">
		<h2> Nosso Propósito </h2>
		<p> <?php the_field('texto_proposito'); ?>	 </p>
	</section>

	<section class="contato">
		<div class="fale-conosco">
			<h2> Fale conosco </h2>
			<form>
				<input type="text" placeholder="Digite seu nome"> <br>
				<input type="text" placeholder="Digite seu e-mail"> <br>
				<textarea rows="11" cols="39" placeholder="Escreva..."></textarea> <br>
				<button type="submit"><a href="#">Envia</a></button>
			</form>
			<br><br>
			<p> Rua Passo da Pátria, 156 - Instituto de Computação - Sala 115-B. Niterói - RJ <br>
			<i class="fa fa-phone"></i> (22) 99746-1629 <br> 
			<i class="fa fa-envelope"></i> contato@injunior.com.br</p>
		</div>
	</section>



<?php get_footer();
