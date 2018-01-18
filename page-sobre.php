<?php 
/* Template Name: Sobre Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>

<h2> Pagina de Sobre </h2>

<?php

$sobre = new WP_Query (array("post_type" => sobre))
?>

<?php if($sobre->have_posts()): ?> <!--pega todos os posts-->
    <?php while($sobre->have_posts()): ?>
        <?php $sobre->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content (); ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> 