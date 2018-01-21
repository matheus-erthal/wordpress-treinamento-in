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

<?php if (have_posts()): the_post(); ?>
<?php while(have_posts()): the_post(); ?>

	<h2> <?php the_title(); ?> </h2>
	
	<p> <?php the_content(); ?> </p>

       
        <img src ="<?php the_field('imagem_1'); ?>">
        <img src ="<?php the_field('imagem_2'); ?>">
        <img src ="<?php the_field('imagem_3'); ?>">
        <img src ="<?php the_field('imagem_4'); ?>">
        <img src ="<?php the_field('imagem_5'); ?>">
        <img src ="<?php the_field('imagem_6'); ?>">
        <img src ="<?php the_field('imagem_7'); ?>">
        <img src ="<?php the_field('imagem_8'); ?>">


    
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
