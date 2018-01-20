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
    <a href = "<?php the_permalink(); ?>" <h2> <?php the_title(); ?></h2> </a> <!-- linka o titulo para single.php-->
    <p><?php the_content();  ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<section>
    <main class="intro_contato">
            <h1>Sobre</h1>
            <p>A melhor confeitaria do Brasil!</p>
        </main>
        <div class="conteudo">
            <div class="conteudo-container">
                    <h2>A confeitaria</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus arcu, vestibulum a quam in, pretium vestibulum massa. Curabitur sit amet gravida odio, sed tempus magna. Curabitur tincidunt lorem quis sapien posuere, non fermentum nulla mollis. Sed accumsan dui libero, ut viverra est semper porta. Duis lobortis purus eu turpis dignissim suscipit. Nam erat tortor, molestie sit amet iaculis vel, venenatis vitae mauris. Curabitur gravida risus at tortor cursus cursus sed congue quam. Nunc feugiat lectus a egestas consequat. Curabitur arcu neque, placerat quis neque tempus, dignissim imperdiet massa. Fusce quis mollis orci. Pellentesque posuere metus at nisi convallis, eget varius leo gravida. Suspendisse suscipit varius magna sit amet condimentum. Etiam lacus turpis, tristique elementum ultrices a, vulputate vitae ante. Donec pulvinar, neque vel pharetra bibendum, velit nisl interdum neque, vel ornare velit ipsum a nibh.
                </p>
            </div>
        </div>
</section>

<?php get_footer(); ?> 
