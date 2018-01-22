<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

 
 get_header(); ?>

<?php
$nossa_query = new WP_Query( array( 'post_type' => 'receitas') );
?>


<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post(); $max_postagens++;?>
        <section class="ph">
    <div class="ph-container">
    <div class="ph-container-texto">
      <p>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="ph-container-blue">
        <img class ="ph-container-imagens" src="<?php the_field('foto_da_receita'); ?>">
        </div>
        <p><?php the_content() ?></p>
      </p>
    
    </diV>
    </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
