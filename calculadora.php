<?php /* Template Name: Calculadora */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="notas">
    <div class="notas-container">
    	<input type="number" id="nota1" placeholder="N1" />
		<input type="number" id="nota2" placeholder="N2" />
		<input type="number" id="nota3" placeholder="N3" />
    </div>
	<div class="botao">
		<div class="calcular" type="submit">Calcular</div>
	</div>
	<div class="motivacao">
		<div class="mensagem"><p class="mensagem-paragrafo">"<div class="media-final"></div>"</p></div>
		<p class="assinatura"> - Minerva MacGonagall.</p>
	</div>
</div>
<?php get_footer();
