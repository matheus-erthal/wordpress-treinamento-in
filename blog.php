<<<<<<< HEAD
<?php

/* Template Name: Blog */
get_header(); ?>


<h2>Minha página pica333</h2>



<?php get_footer() ?>
=======
<?php

/* Template Name: Quem Somos */
get_header(); ?>


<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
    <div class="postagem">
        <h2>
            <a href=<?php "the_permalink()" ?>>
                <?php the_title()?>
        </a></h2>
        <p>
            <?php the_content() ?>
        </p>
    </div>   
<?php endwhile;
endif; ?>

<?php get_footer() ?>
>>>>>>> 0cff8929256a7a94b391cbc4e12f4df9bdb1c713
