<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php // The Query


$nossa_query = new WP_Query( array( 'post_type' => notas) ); 
?>

<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer();
