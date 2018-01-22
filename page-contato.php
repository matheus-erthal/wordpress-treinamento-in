<?php
/* Template Name: Contatos Template*/
get_header();

?>

<div class="tudo">
<section class="contato">
        <div class="formulario">
            <form id="contact" method="post">
                <label>Nome</label>
                <input type="text" placeholder="Seu nome">
                <label>E-mail</label>
                <input type="text" placeholder="Seu e-mail">
                <label>O que deseja?</label>
                <input id = "texto" type="text" placeholder="O que deseja?">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <section class = "info">
        <div class = "info-container">
            <img src = "<?= get_template_directory_uri(); ?>/img/logooficial.png" alt = "INBurger">
            <p>Telefone: (21) 3333-3333</p>
            <p>E-mail: inburger@id.uff.br</p>
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
$nova_contato = new WP_Query (array("post_type"  => Contatos)); //
?>
<!--isso aqui tera q ficar dentro do html contatos-->
<?php if($nova_contato->have_posts()): ?> <!--pega todos os posts-->
    <?php while($nova_contato->have_posts()): ?>
        <?php $nova_contato->the_post(); ?> <!--puxa o post-->
    <a href = "<?php the_permalink(); ?>" <h2>
      <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>
<!---->
<?php get_footer(); ?>
