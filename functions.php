<?php


add_theme_support( 'post-thumbnails' );
wp_enqueue_style('style', get_stylesheet_uri());

function cadastrando_post_type_receitas() {
    $nomeSingular = 'Receita';
    $nomePlural = 'Receitas';
    $deion = 'Receitas dos pratos';
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
        'deion' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => $supports
    );
    register_post_type( 'receitas', $args);
}
add_action('init', 'cadastrando_post_type_receitas');?>
