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

<?php if (have_posts()): // inserir todos os programas ,para que o que está contido no wordpress apareça?>
    <?php while(have_posts()): ?>
      <?php the_post(); ?>
      <div class="sobre-container">
        <img src="<?php the_field('foto_sobre') ?>" class="foto-sobre" alt="Foto da Professora"></img> <!-- inserir a Imagem do wordpress na page -->
        <div class='text_contenier'>
          <?php the_content(); ?> <!-- inserir o texto do wordpress na page-->
          <div>
            <button class="back-to-top" id="topo">Suba ao topo</button>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>


<div><button class="back-to-top">Suba ao topo</button></div>

<?php get_footer();
