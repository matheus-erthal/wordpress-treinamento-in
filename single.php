<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
    <div class="postagem">
    <h2 class="titulo">
        <a href="<?php the_permalink()?>">
            <?php the_title(); ?>
    </h2></a>
    <p class="conteudo"><?php the_content() ?></p>
    </div>
<?php endwhile; ?>

<?php get_footer();
