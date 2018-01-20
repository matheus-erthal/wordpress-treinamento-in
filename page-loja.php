<?php
/* Template Name: Loja Template*/
get_header();

?>

<?php

$nova_loja = new WP_Query (array("post_type"  => lojas));
?>

<?php if($nova_loja->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_loja->have_posts()): ?>
        <?php $nova_loja->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>"> <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
