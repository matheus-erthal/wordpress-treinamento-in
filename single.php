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


get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?><h2>
		<img src="<?php the_field('ingredientes'); ?>" alt = "Receitas">
<?php endwhile; ?>

<?php get_footer();
