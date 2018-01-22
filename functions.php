<?php

wp_enqueue_style('style', get_stylesheet_uri());

add_theme_support( 'post-thumbnails' );

<<<<<<< HEAD
function adicionar_script(){
    wp_enqueue_script('script_funcionalidades', get_template_directory_uri() . '/js/funcionalidades.js', array('jquery'),'1.0', false);
=======
//para adicionar jQuery
function adicionar_script(){
	wp_enqueue_script('script_funcionalidades', get_template_directory_uri() . '/js/funcionalidades.js', array('jquery'),'1.0', false);
>>>>>>> 1aa17382c635b87f7530eb0d86e5607df75cb523

}

add_action( 'wp_enqueue_scripts', 'adicionar_script' );
<<<<<<< HEAD

=======
>>>>>>> 1aa17382c635b87f7530eb0d86e5607df75cb523

function cadastrando_post_type_imagens() {

    $nomeSingular = 'Imagem';
    $nomePlural = 'Imagens';
    $deion = 'Carousel imagens';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular,
        'edit_item' => 'Editar' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'deion' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-edit',
        'supports' => $supports
    );


    register_post_type( 'imagens', $args);    
}

add_action('init', 'cadastrando_post_type_imagens');


////////////////////////////////////////


add_action( 'pre_get_posts', 'modifica_busca' );

function modifica_busca( $query ) {

    // pre_get_posts é chamada diversas vezes numa requisição
    // então precisamos conferir se estamos na chamada pricipal da busca
    if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
        $termo_de_busca = get_search_query();

        // busca se a palavra digitada confere com alguma categoria
        // taxonomy pode ser trocada por post_tag ou outra taxonomia
        $taxonomy = 'category';
        $cat = get_term_by( 'slug', $termo_de_busca, $taxonomy );

        // se o termo de busca não existe como termo de uma 
        // taxonomia, retorna e finaliza a busca aqui
        if ( ! $cat ) {
            return;
        }

        // remove o termo de busca pra que a busca não inclua somente
        // os posts que tem a palavra no titulo ou conteudo
        $query->set( 's', '' );

        // busca outras consultas por taxonomia que podem existir
        $tax_query = $query->get( 'tax_query' );

        // adiciona a nossa
        $tax_query[] = array(
            'field' => 'slug',
            'taxonomy' => $taxonomy,
            'terms' => $termo_de_busca,
        );

        // adiciona a busca completa de volta à consulta principal
        $query->set( 'tax_query', $tax_query );
    }
}
