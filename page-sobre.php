<?php
/* Template Name: Sobre Template*/
get_header();

?>

<?php
$nova_sobre = new WP_Query (array("post_type" => sobre)); //determina dois posts na pagina
?>

    <section>
        <div class="conteudo">
            <div class="conteudo-container">
              <?php if($nova_sobre->have_posts()): ?> <!--pega todos os posts-->
                  <?php while($nova_sobre->have_posts()): ?>
                      <?php $nova_sobre->the_post(); ?> <!--puxa o post-->
                  <a href = "<?php the_permalink(); ?>"
                    <img src= "<?= get_field(''); ?>" alt="<?php the_field('');?>"
                    <h2><?php get_field(''); ?></h2>
                <p><?php get_field('');  ?></p>
              <?php endwhile; ?>
          <?php endif; ?>
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
                </div>
            </div>
    </section>

<?php get_footer(); ?>
