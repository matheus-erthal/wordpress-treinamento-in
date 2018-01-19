<?php

add_theme_support( 'post-thumbnails' );

function cadastrando_post_type_receitas() {

    $nomeSingular = 'Receita';
    $nomePlural = 'Receitas';
    $deion = 'Receita dos pratos';

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

add_action('init', 'cadastrando_post_type_receitas');

function cadastrando_post_type_lojas() {

    $nomeSingular = 'Loja';
    $nomePlural = 'Lojas';
    $deion = 'Localização das Lojas';

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
        'menu_icon' => 'dashicons-location',
        'supports' => $supports
    );


    register_post_type( 'lojas', $args);    
}

add_action('init', 'cadastrando_post_type_lojas');

function cadastrando_post_type_sobre() {

    $nomeSingular = 'Sobre';
    $nomePlural = 'Sobre';
    $deion = 'Sobre nós';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Modificar conteúdo' . $nomeSingular,
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
        'menu_icon' => 'dashicons-admin-comments',
        'supports' => $supports
    );


    register_post_type( 'sobre', $args);    
}

add_action('init', 'cadastrando_post_type_contato');

function cadastrando_post_type_contato() {

    $nomeSingular = 'Contato';
    $nomePlural = 'Contatos';
    $deion = 'Contatos';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Modificar conteúdo' . $nomeSingular,
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
        'menu_icon' => 'dashicons-admin-comments',
        'supports' => $supports
    );


    register_post_type( 'contato', $args);    
}

add_action('init', 'cadastrando_post_type_contato');

