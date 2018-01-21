<?php /* Template Name: Turmas */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php $query_posts = new WP_Query(array('category_name' => 'turmas')) ?>
    <?php if ($query_posts->have_posts()): ?>
        <?php while($query_posts->have_posts()): $query_posts->the_post(); ?>
          <div>
            <?php the_title(); ?> <!-- Nome da Turma -->
          </div>
          <div>
            <img src="<?php the_field('imagem_turma') ?>" class="foto-turma" alt="Foto da turma, page turmas"></img> <!-- inserir a Imagem do wordpress na page -->
          </div>
      <?php endwhile; ?>
<?php endif; ?>

<div><button class="back-to-top">Suba ao topo</button></div>

<?php get_footer();
