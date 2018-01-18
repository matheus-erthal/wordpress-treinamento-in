<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if (have_posts()): // como inserir um post?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <a href=""<?php get_permalink(); ?>"<h2><?php the_title(); ?></h2></a>
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer();
