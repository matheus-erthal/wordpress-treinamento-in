<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<header class="top">
		<div class="top-container">
			<a class="top-logo" href="#"><img src="<?= get_template_directory_uri(); ?>/img/logo-in-resized.png" alt="IN Junior"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="#">Quem somos</a></li>
					<li><a href="#">Projetos</a></li>
					<li><a href="#">Nosso propósito</a></li>
					<li><a href="#">Contato</a></li>
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
				</ul>
			</nav>
		</div>
	</section> 

	<section class="intro">
		<p> Welcome to the IN experience </p>
	</section>

	<section class="principal">
		<div class="quem-somos">
			<h2> Quem Somos </h2>
			<div class="wolf"> 
			<img src="<?= get_template_directory_uri(); ?>/img/lobo.png"alt="Lobo">
			</div>
				<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in metus eu lorem vulputate consectetur. Donec nec ultrices ante. Phasellus viverra orci in est suscipit, sed volutpat risus feugiat. Sed bibendum ut neque dapibus vestibulum. Aliquam erat volutpat. Duis pulvinar nunc quis auctor rhoncus. </p> <br>
				<p> Mauris ac eros sit amet odio maximus mollis nec in tortor. Ut imperdiet fermentum malesuada. Vivamus a justo urna. Donec sit amet scelerisque mauris. Sed vitae vulputate velit, et rutrum mauris. Integer ac sagittis dolor, eget vehicula tortor. Phasellus rutrum sodales rhoncus. Suspendisse id diam diam. In hac habitasse platea dictumst. Morbi imperdiet tellus ut sapien bibendum, id sagittis odio aliquet. </p>				<p>Mauris ac eros sit amet odio maximus mollis nec in tortor. Ut imperdiet fermentum malesuada. Vivamus a justo urna. Donec sit amet scelerisque mauris. Sed vitae vulputate velit, et rutrum mauris. Integer ac sagittis dolor, eget vehicula tortor. Phasellus rutrum sodales rhoncus. Suspendisse id diam diam. In hac habitasse platea dictumst. Morbi imperdiet tellus ut sapien bibendum, id sagittis odio aliquet. </p>
				 </div> 
		</div>
	</section>

	<section class="projetos">
		<div class="projects">
			<h2> Projetos </h2>
			<div class="slider"> 
				<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in metus eu lorem vulputate consectetur. Donec nec ultrices ante. Phasellus viverra orci in est suscipit, sed volutpat risus feugiat. Sed bibendum ut neque dapibus vestibulum. Aliquam erat volutpat. Duis pulvinar nunc quis auctor rhoncus. </p> 
				<p> Mauris ac eros sit amet odio maximus mollis nec in tortor. Ut imperdiet fermentum malesuada. Vivamus a justo urna. Donec sit amet scelerisque mauris. Sed vitae vulputate velit, et rutrum mauris. Integer ac sagittis dolor, eget vehicula tortor. Phasellus rutrum sodales rhoncus. Suspendisse id diam diam. In hac habitasse platea dictumst. Morbi imperdiet tellus ut sapien bibendum, id sagittis odio aliquet. </p>
				<img src="" alt="projeto">
			</div>
		</div>
	</section>

	<section class="proposito">
		<h2> Nosso Propósito </h2>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in metus eu lorem vulputate consectetur. Donec nec ultrices ante. Phasellus viverra orci in est suscipit, sed volutpat risus feugiat. Sed bibendum ut neque dapibus vestibulum. Aliquam erat volutpat. Duis pulvinar nunc quis auctor rhoncus. </p>
	</section>

	<section class="contato">
		<div class="fale-conosco">
			<h2> Fale conosco </h2>
			<form>
				<input type="text" placeholder="Digite seu nome"> <br>
				<input type="text" placeholder="Digite seu e-mail"> <br>
				<input type="pharagraph" placeholder="Escreva..."> <br>
				<button type="submit"><a href="#">Envia</a></button>
			</form>
			<!--<img src="" alt="Mapa do IC-UFF"> -->
			<br><br>
			<p> Rua Passo da Pátria, 156 - Instituto de Computação - Sala 115-B. Niterói - RJ <br>
			<i class="fa fa-phone"></i> (22) 99746-1629 <br> 
			<i class="fa fa-envelope"></i> contato@injunior.com.br</p>
		</div>
	</section>



<?php get_footer();