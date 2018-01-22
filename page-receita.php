
<?php
/* Template Name: Receita Template*/
get_header();

?>
<div class="tudo">
    <section>
        <div class="receitas">
            <div class="esquerda">
                <img id = "principal" src= "<?= get_template_directory_uri(); ?>/img/receita1.jpg">
                <h2>Frango Frito</h2>
                <p>receita aqui</p>
            </div>
            <div class="direita">
                <img src="<?= get_template_directory_uri(); ?>/img/receita2.jpg">
                <h2>Nachos Mexicanos</h2>
                <p>receita aqui</p>
            </div>
            <div class="esquerda">
                <img src="<?= get_template_directory_uri(); ?>/img/receita3.jpg">
                <h2>Hamburguer Caseiro</h2>
                <p>receita aqui</p>
            </div>
            <div class="direita">
                <img src="<?= get_template_directory_uri(); ?>/img/receita4.jpg">
                <h2>Salada com Manga</h2>
                <p>receita aqui</p>
            </div>
            <div class="esquerda">
                <img src= "<?= get_template_directory_uri(); ?>/img/receita5.jpg">
                <h2>Cookies com Nutella</h2>
                <p>receita aqui</p>
            </div>
        </div>
    </section>
    
    <section class="links">
        <div class="links-container">
          <div class="links-nav">
              <ul>
                <li><a href="contato.html">Contate-nos</a></li>
                <li><a href="loja.html">Onde Estamos</a></li>
                <li><a href="receita.html">Receitas</a></li>
              </ul>
          </div>
        </div>
      </section>

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
