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
        
    <section class="conteudo">
        <div class="conteudo-container">
            <div class="conteudo-nav" >
                <h2>A confeitaria</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus arcu, vestibulum a quam in, pretium vestibulum massa. Curabitur sit amet gravida odio, sed tempus magna. Curabitur tincidunt lorem quis sapien posuere, non fermentum nulla mollis. Sed accumsan dui libero, ut viverra est semper porta. Duis lobortis purus eu turpis dignissim suscipit. Nam erat tortor, molestie sit amet iaculis vel, venenatis vitae mauris. Curabitur gravida risus at tortor cursus cursus sed congue quam. Nunc feugiat lectus a egestas consequat. Curabitur arcu neque, placerat quis neque tempus, dignissim imperdiet massa. Fusce quis mollis orci. Pellentesque posuere metus at nisi convallis, eget varius leo gravida. Suspendisse suscipit varius magna sit amet condimentum. Etiam lacus turpis, tristique elementum ultrices a, vulputate vitae ante. Donec pulvinar, neque vel pharetra bibendum, velit nisl interdum neque, vel ornare velit ipsum a nibh.</p>
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
                
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?> 
