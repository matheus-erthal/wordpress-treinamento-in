
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
    <div class="postagem">
    <img src="<?php the_field('foto_da_receita') ?>">
    <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
    <p><?php the_content() ?></p>
   
    <p>
        <?php the_field('ingredientes') ?>
    </p>
    <p>
        <?php the_field('modo_de_fazer') ?>
    </p>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
