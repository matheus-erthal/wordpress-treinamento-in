<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <img src="<?php the_field('imagem_post'); ?>" alt="Foto da tia Roro">

<?php endwhile; ?>

<?php get_footer();
 