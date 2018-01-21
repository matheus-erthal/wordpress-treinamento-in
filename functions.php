<?php


add_theme_support( 'post-thumbnails' );
wp_enqueue_style('style', get_stylesheet_uri());

function cadastrando_post_type_receitas() {
    $nomeSingular = 'Receita';
    $nomePlural = 'Receitas';
    $descricao = 'Receitas do restaurante';

function cadastrando_post_type_notas() {

    $nomeSingular = 'Nota';
    $nomePlural = 'Notas';
    $descricao = 'Notas dos alunos';

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


    register_post_type( 'receitas', $args);
}

add_action('init', 'cadastrando_post_type_receitas');

    register_post_type( 'notas', $args);

    add_action('init', 'cadastrando_post_type_notas');
}
