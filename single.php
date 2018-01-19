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


<?php while(have_posts()): the_post(); ?>

	<h2> <?php the_title(); ?> </h2>
	
	<p> <?php the_content(); ?> </p>
	<img src="<?php the_field('aluno'); ?>">
<?php endwhile; ?>
<<<<<<< HEAD

=======

    <?php while(have_posts()):the_post(); ?>

        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>

>>>>>>> 9dc3fc3522eabc8ffbac52d016c567533f0cb2f8

<?php get_footer();
