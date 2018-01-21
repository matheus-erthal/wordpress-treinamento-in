
<?php
/* Template Name: Receita Template*/
get_header();

?>
<h2> Pagina de Receitas </h2>

<?php
$nova_receita = new WP_Query (array("post_type" => receitas)); //determina dois posts na pagina

?>

<?php if($nova_receita->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_receita->have_posts()): ?>
        <?php $nova_receita->the_post(); ?> <!--puxa o post-->
        <a href = "<?php the_permalink(); ?>">
           <h2> <?php get_field(''); ?></h2> </a> <!-- linka o titulo para single.php-->
                <p><?php get_field('');  ?></p>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
