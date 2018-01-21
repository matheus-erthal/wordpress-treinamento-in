<?php /* Template Name: noticias */ ?>
<?php
/**
 *
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="painel-master">
    <?php $query_posts = new WP_Query(array('category_name' => 'avisos')) ?>
        <?php if ($query_posts->have_posts()): ?>
            <?php while($query_posts->have_posts()): $query_posts->the_post(); ?>
                <div class="painel">
                    <div class="painel-botao">
                            <div class="painel-data">
                              <?php  the_time("F j, Y"); ?> <!-- data -->
                            </div>
                            <div class="painel-titulo">
                              <?php the_title(); ?> <!-- titulo do aviso -->
                            </div>
                    </div>
                    <div class="painel-container">
                        <div class="painel-mens">
                          <?php the_content(); ?> <!-- conteudo da noticia -->
                        </div>
                        <div class="painel-para">
                          <?php the_field('para_mensagem'); ?> <!-- para quem -->
                        </div>
                    </div>
                </div>
          <?php endwhile; ?>
    <?php endif; ?>
</div>
<div><button class="back-to-top">Suba ao topo</button></div>
<?php get_footer();
