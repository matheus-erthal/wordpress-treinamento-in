<?php
/* Template Name: Sobre Template*/
get_header();

?>

<?php
$nova_sobre = new WP_Query (array("post_type" => sobre)); //determina dois posts na pagina
?>

<?php if($nova_sobre->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_sobre->have_posts()): ?>
        <?php $nova_sobre->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>"></a>
    <section>
        <main class="intro_contato">
                <h1>Sobre</h1>
                <p></p>
            </main>
            <div class="conteudo">
                <div class="conteudo-container">
                        <h2><?php the_title(); ?></h2>
                    <p><?php the_content();  ?></p>
                </div>
            </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> 
