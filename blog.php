<?php

/* Template Name: Blog */

get_header();

?>

<?php 
/* $the_query = new WP_Query( array('posts_per_page' => 2, 'order' => 'DESC') ); */
?>

<!-- <?php //The Query 
$nossa_query = new WP_Query( array('posts_type' => news) );
?> -->

<section class="posts">
	<div class="posts-container">
		<?php if ($nossa_query -> have_posts()): ?>
    	<?php while($nossa_query -> have_posts()): ?>
	        <?php $nossa_query -> the_post(); ?>
			<a href="<?php the_permalink(); ?>">
			<h2><?php the_title(); ?></h2> </a>
			<p> <?php the_date() ?>, <?php the_time();?> </p>
			<p><?php the_content(); ?></p>
    	<?php endwhile; ?>
    	<?php endif; ?>
	</div>
</section>

<?php get_footer();