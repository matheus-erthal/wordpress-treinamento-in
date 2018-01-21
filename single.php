<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

    <div class="postagem">
    <h2 class="titulo">
        <a href="<?php the_permalink()?>">
            <bold><?php the_title(); ?></bold>
    </h2></a>
    <p class="conteudo"><?php the_content() ?></p>
    <br>
    <img src="<?php the_field('foto_da_receita') ?>">
    <br>
    <p>
        <?php the_field('ingredientes') ?>
    </p>
    <br>
    <p>
        <?php the_field('modo_de_fazer') ?>
    </p>
    </div>
<?php endwhile; ?>




    <h2><?php the_title(); ?></h2>
    <img src="<?php the_field('imagem_post'); ?>" alt="Foto da tia Roro">

<?php endwhile; ?>

<?php get_footer();
