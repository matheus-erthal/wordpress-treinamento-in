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
$nossa_query = new WP_Query( array('posts_type' => notas) );
?>

<div class="blog-post">
	<?php if ($nossa_query -> have_posts()): ?>
    
  	  <?php while($nossa_query -> have_posts()): ?>
    
        	<?php $nossa_query -> the_post(); ?>
		<div class="blog-post-item">
			<div class="blog-title">	
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2> </a>
			</div>
			<div class="blog-text">
				<p><?php the_content(); ?></p>
			</div>
		</div>
    	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer();
