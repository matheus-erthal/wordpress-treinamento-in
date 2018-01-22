<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>








<h1>Receitas</h1>

<?php // The Query
$nossa_query = new WP_Query( array( 'post_type' => 'receitas') );
?>

<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post(); ?>
        <div class="conteudo">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <br>
        <img src="<?php the_field('foto_da_receita'); ?>    ">
        <br>
        <p><?php the_content() ?></p>

    </div>

    <?php endwhile; ?>
<?php endif; ?>



<<<<<<< HEAD









<?php // The Query
$nossa_query = new WP_Query( array( 'post_type' => 'receitas') );
?>

<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post(); ?>
        <div class="conteudo">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <br>
        <img src="<?php the_field('foto_da_receita'); ?>    ">
        <br>
        <p><?php the_content() ?></p>

    </div>

    <?php endwhile; ?>
<?php endif; ?>






<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile;
    endif; ?>


    <?php get_footer();
=======
<h1 style="text-align: center">Site do Amanco</h1>



<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile;
    endif; ?>


    <?php get_footer();
>>>>>>> 0cff8929256a7a94b391cbc4e12f4df9bdb1c713
