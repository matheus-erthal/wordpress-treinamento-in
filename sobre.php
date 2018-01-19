<?php /* Template Name: Sobre */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--
  <div class="foto-sobre">
  			<img src="<?= get_template_directory_uri(); ?>/img/minerva.jpg" alt="Foto da professora minerva">
    </div>
-->

<?php if (have_posts()): // como inserir todos os post?>
    <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <img src="<?php the_field('foto_sobre') ?>" class="foto-sobre"></img>
      <div class='text_contenier'>
      <?php the_content(); ?>
      </div>



    <?php endwhile; ?>
<?php endif; ?>


<div><button class="back-to-top" id="topo">Suba ao topo</button></div>
<!--
<script>
$(document).ready (function() {
	$('#topo').fadeOut();
	$('.back-to-top').click(function() {

		$('html body').animate({scrollTop: 0}, 500);
	});

	$(window).scroll( function(){
		var dist = $(window).scrollTop();
		if(dist > 100){
		$('#topo').fadeIn();
		}
		else {
			$('#topo').fadeOut();
		}
	});

});
</script>

-->
<?php get_footer();
