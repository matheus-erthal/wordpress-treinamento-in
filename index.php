<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php //The Query 
$nossa_query = new WP_Query( array('posts_type' => news) );
?>

<h1>Blog Grupo 2</h1>

<?php if ($nossa_query -> have_posts()): ?>
    
    <?php while($nossa_query -> have_posts()): ?>
    
        <?php $nossa_query -> the_post(); ?>
	
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2> </a>
	
	<p><?php the_content(); ?></p>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();