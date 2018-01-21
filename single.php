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

?>


<section class="post">
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<p> <?php the_date() ?>, <?php the_time();?> </p>
		<p><?php the_content(); ?></p>

	<?php endwhile; ?>
<?php endif; ?>
</section>

<?php get_footer();
