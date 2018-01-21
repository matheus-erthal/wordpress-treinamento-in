<?php

/* Template Name: Blog */
get_header(); ?>


<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile; ?>
    <?php endif; ?>



<?php get_footer() ?>
