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
$nossa_query = new WP_Query( array("posts_per_page" => 5) );
?>

<h1>Blog Grupo 4</h1>



<?php if ($nossa_query -> have_posts()): ?>
    
    <?php while($nossa_query -> have_posts()): ?>

    
        <?php $nossa_query -> the_post(); ?>
	
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2> </a>
	
	<p><?php the_content(); ?></p>

    <?php endwhile; ?>
<?php endif; ?>


<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous post', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'post', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

<?php get_footer();

