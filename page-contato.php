<?php
/* Template Name: Contatos Template*/
get_header();

?>


        <section class="contato">
                <div class="formulario">
                    <form id="contact" action="" method="post">
                        <label>Nome</label>
                        <input type="text" placeholder="Seu nome">
                        <label>E-mail</label>
                        <input type="text" placeholder="Seu e-mail">
                        <label>O que deseja?</label>
                        <input type="text" placeholder="O que deseja?">
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </section>

            <section class = "imagem">
                <div class = "logo">
                    <img src = "<?= get_template_directory_uri(); ?>/img/logo.png" alt = "INBurger">
                </div>
            </section>

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
