<?php
/* Template Name: Loja Template*/
get_header();

?>

    <section>
        <div class="local">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3672.7115612914304!2d-43.360729149820905!3d-22.997631784891894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1516453618505" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
