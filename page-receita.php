<<<<<<< HEAD
<?php
/* Template Name: Receita Template*/
get_header();

?>
    <section>
        <div class="receitas">
            <img src="<?= get_template_directory_uri(); ?>/img/receita1.jpg">
            <p>receita aqui</p>
        </div>
        <div>
            <img src="<?= get_template_directory_uri(); ?>/img/receita2.jpg">
            <p>receita aqui</p>
        </div>
        <div>
            <img src="<?= get_template_directory_uri(); ?>/img/receita3.jpg">
            <p>receita aqui</p>
        </div>
        <div>
           <img src="<?= get_template_directory_uri(); ?>/img/receita4.jpg">
           <p>receita aqui</p>
       </div>
       <div>
            <img src="<?= get_template_directory_uri(); ?>/img/receita5.jpg">
            <p>receita aqui</p>
        </div>
    </section> 

<?php
$nova_receita = new WP_Query (array("post_type" => receitas)); //determina dois posts na pagina

?>

<?php if($nova_receita->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_receita->have_posts()): ?>
        <?php $nova_receita->the_post(); ?> <!--puxa o post-->
        <a href = "<?php the_permalink(); ?>"> <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
        <p><?php the_content();  ?></p>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
