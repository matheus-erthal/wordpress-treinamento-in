<?php 
/* Template Name: Home Template */  
get_header();

?>

<?php $query_posts = new WP_Query(array('post_type' => post, 'posts_per_page' => 3)) ?>

<div class="container">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="http://noticias.universia.com.br/net/images/educacion/-/-s/-sa/-sala-de-aula-invertida.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Third slide">
        </div>
    </div>
    </div>


    <section class="text-center my-4">
        <h2 class="titulo">Últimas notícias</h2>
        <div class="row">
            <?php if($query_posts->have_posts()): 
                while($query_posts->have_posts()): $query_posts->the_post(); ?>
                <div class="col-md">
                    <div class="card mx-auto my-2" style="width: 18rem;">
                        <img class="card-img-top" src="<?php the_field('imagem_post') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver o post</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
                endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>

