<?php

wp_enqueue_style('style', get_stylesheet_uri());

add_theme_support( 'post-thumbnails' );


function adicionar_script(){
	wp_enqueue_script('script_funcionalidades', get_template_directory_uri() . '/js/funcionalidades.js', array('jquery'),'1.0', false);

}

add_action( 'wp_enqueue_scripts', 'adicionar_script' );


function cadastrando_post_type_notas() {

    $nomeSingular = 'Nota';
    $nomePlural = 'Notas';
    $deion = 'Notas dos alunos';

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


    register_post_type( 'notas', $args);    
}

add_action('init', 'cadastrando_post_type_notas');
