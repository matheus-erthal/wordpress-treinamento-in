<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

 
 get_header(); ?>

<?php
$nossa_query = new WP_Query( array( 'post_type' => 'receitas') );
$max_postagens = 0;?>


<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts() and $max_postagens < 3): ?>
        <?php $nossa_query->the_post(); $max_postagens++;?>
        <div class="conteudo">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <br>
        <img src="<?php the_field('foto_da_receita'); ?>    ">
        <br>
        <p><?php the_content() ?></p>

    </div>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
