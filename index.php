<?php
/* Template Name: Home Template */
get_header(); ?>



<?php
$nossa_query = new WP_Query( array( 'post_type' => 'receitas') );?>

<section class="ph">

<?php if ($nossa_query->have_posts()): ?>
    <?php while($nossa_query->have_posts()): ?>
        <?php $nossa_query->the_post();?>
        <div class="ph">
            <div class="ph-container">
             <img src="<?php the_field('foto_da_receita'); ?>" class="ph-container-blue">
        
        
            <div class="ph-container-texto">
             <p>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                 <?php the_content() ?>
            </p>
            </div>
            </div>
        

        <?php $nossa_query->the_post();?>
        
            <div class="ph-container">
             <img src="<?php the_field('foto_da_receita'); ?>" class="ph-container-yellow">
        
        
            <div class="ph-container-texto">
             <p>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                 <?php the_content() ?>
            </p>
            </div>
            </div>
        

        <?php $nossa_query->the_post();?>
        
            <div class="ph-container">
             <img src="<?php the_field('foto_da_receita'); ?>" class="ph-container-green">
        
        
            <div class="ph-container-texto">
             <p>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                 <?php the_content() ?>
            </p>
            </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>
