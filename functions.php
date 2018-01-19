<?php

wp_enqueue_style('style', get_stylesheet_uri());

add_theme_support( 'post-thumbnails' );

function cadastrando_post_type_news() {

    $nomeSingular = 'Notícia';
    $nomePlural = 'Notícias';
    $descricao = 'Notícias da IN';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-edit',
        'supports' => $supports
    );


    register_post_type( 'news', $args);
}

add_action('init', 'cadastrando_post_type_news');
