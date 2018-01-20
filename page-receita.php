<?php 
/* Template Name: Receita Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>



<?php
$nova_receita = new WP_Query (array("post_type" => receitas))
?>

<?php if($nova_receita->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_receita->have_posts()): ?>
        <?php $nova_receita->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
