<?php
/**
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.2
 */

?>

<footer class="footer">

	<div class="footer-container">
		<div class="footer-esquerda">

			<p>Rua Passo da Pátria, 156 - Instituto de Computação
			<br>
			sala 115-B
			<br>
			Niterói RJ</p>
		</div>
		<div class="footer-meio">
			<ul>
				<li><a href="https://www.facebook.com/injunioruff"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://www.linkedin.com/company/in-junior"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/injunioruff"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>	

			<p>copyright
			<br>
			contato@injunior.com.br</p>	
		</div>

		<img src="<?= get_template_directory_uri(); ?>/img/logo-branca-in.png" alt="logo branca da In Junior">
	
	</div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
