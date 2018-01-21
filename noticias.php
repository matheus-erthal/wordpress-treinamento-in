<?php /* Template Name: noticias */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php $query_posts = new WP_Query(array('category_name' => 'noticias')) ?>
  <?php if ($query_posts->have_posts()): ?>
    <?php while($query_posts->have_posts()): $query_posts->the_post(); ?>
      <?php the_title(); ?>
      <?php the_content(); ?>
      <?php the_field('para_mensagem'); ?> <br>
      <?php the_time("F j, Y"); ?>
          <br>
          <br>
    <?php endwhile; ?>
  <?php endif; ?>

<div><button class="back-to-top">Suba ao topo</button></div>
<?php get_footer();
