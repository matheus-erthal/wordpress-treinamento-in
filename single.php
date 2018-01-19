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

<<<<<<< HEAD
<?php while(have_posts()): the_post(); ?>

	<h2> <?php the_title(); ?> </h2>
	
	<p> <?php the_content(); ?> </p>
<?php endwhile; ?>
=======
<<<<<<< HEAD
<?php while(have_posts()): the_post(); ?>
	<h2> <?php the_title(); ?> </h2>
	<p> <?php the_content(); ?> </p>
<?php endwhile; ?>
=======
    <?php while(have_posts()):the_post(); ?>

        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>

>>>>>>> ea5faa6481d66c7cdd4cfc9b46f721138cd3d7c8
>>>>>>> 911a476a95990a31d8f1323bde020afb45454c14

<?php get_footer();
