<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<h1>Grupo 1</h1>

<?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer();
