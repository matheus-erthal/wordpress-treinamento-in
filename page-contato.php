<?php
/* Template Name: Contatos Template*/
get_header();

?>
<h2> Página de Contato</h2>

<?php
$nova_contato = new WP_Query (array("post_type"  => Contatos)); //
?>

<?php if($nova_contato->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_contato->have_posts()): ?>
        <?php $nova_contato->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
