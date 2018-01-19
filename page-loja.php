<<<<<<< HEAD
<?php
/* Template Name: Loja Template*/
get_header();

?>
<h2> Página de Lojas</h2>

<?php
$nova_loja = new WP_Query (array("post_type"  => lojas)); //
=======
<?php 
/* Template Name: Loja Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>

<h2> Pagina de Lojas </h2>

<?php
$nova_loja = new WP_Query (array("post_type" => lojas));
>>>>>>> 8e9a18fb211f6e01791d245e84e298ebe561cfbe
?>

<?php if($nova_loja->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_loja->have_posts()): ?>
<<<<<<< HEAD
        <?php $nova_loja->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
=======
        <?php $nova_loja->the_post(); ?>
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content (); ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> 
>>>>>>> 8e9a18fb211f6e01791d245e84e298ebe561cfbe
