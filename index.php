<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<h1 style="text-align: center">Site do Amanco</h1>

<?php if(have_posts()): 
    while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile;
    endif; ?>


<?php get_footer();
