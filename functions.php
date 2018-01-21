<?php

add_theme_support( 'post-thumbnails' );

function cadastrando_post_type_turmas() {

    $nomeSingular = 'Turma';
    $nomePlural = 'Turmas';
    $deion = 'turmas da professora';

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
        'menu_icon' => 'dashicons-edit',
        'supports' => $supports
    );


    register_post_type( 'turmas', $args);
}

add_action('init', 'cadastrando_post_type_turmas');
