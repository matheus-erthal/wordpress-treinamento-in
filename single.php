<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

<<<<<<< HEAD
get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?><h2>
		<img src="" alt = "Receitas">
		<?php the_field('ingredientes'); ?>
<?php endwhile; ?>



=======
get_header(); ?>  <!-- como se fosse um link para o header, onrigatoriamente tem que ter wp_head-->
    <?php while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?><h2>
    <?php endwhile; ?>
>>>>>>> 8e9a18fb211f6e01791d245e84e298ebe561cfbe

<?php get_footer();