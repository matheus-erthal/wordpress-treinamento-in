<?php /* Template Name: turma */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
      <img src=<?php the_field('foto_turma') ?> alt="Foto da Turma"></img>
      <?php the_post(); ?>
      <?php endwhile; ?>
<?php endif; ?>

<?php $query_posts = new WP_Query(array('posts_per_page' => 3,'category_name' => 'noticias')) ?>
  <?php if ($query_posts->have_posts()): ?>
    <?php while($query_posts->have_posts()): $query_posts->the_post(); ?>
      <br>
      <br>
      <?php the_title(); ?> <!-- Titulo da avisos -->
      <?php the_content(); ?> <!-- O aviso -->
      <?php the_field('para_mensagem'); ?> <!-- Destinatario do aviso -->
      <?php the_time("F j, Y"); ?> <!-- data e hora -->
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_posts()): ?>
      <?php while(have_posts()): ?>
        <h2> CARALHOOOOOOOOOO </h2>
            <?php the_post(); ?>
            <?php the_field('alunos'); ?> <!-- Alunos -->
            <?php the_field('descricao'); ?> <!-- Descricao -->
            <?php the_field('arquivos'); ?> <!-- Arquivos -->

        <?php endwhile; ?>
  <?php endif; ?>


  <button class="back-to-top" id="topo">Suba ao topo</button>
<?php get_footer();
