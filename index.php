<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php //the Query - exibe 2 posts por página.
    $nossa_query = new WP_Query( array('posts_per_page' => 2, order => 'DESC'));
 ?>

 <?php //the Query - exibe 2 posts por página.
    $nossa_query = new WP_Query( array('post_type' => notas));
 ?>

 
<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post(); ?>
        <a href="<?php get_permalink()?>"><?php the_title();?><h2><?php the_title(); ?></h2></a>
        
    <?php endwhile; ?>
<?php endif; ?>

<?php  ?>


<?php get_footer();