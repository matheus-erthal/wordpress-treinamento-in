<?php

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
            'editor'
        );
    
        $args = array(
            'labels' => $labels,
            'd' => $descricao,
            'public' => true,
            'menu_icon' => 'dashicons-edit',
            'supports' => $supports
        );
    
    
        register_post_type( 'notas', $args);    
}
    
add_action('init', 'cadastrando_post_type_notas');

function registrar_menu_navegacao() { 
    register_nav_menu('header-menu', 'main_menu');
}

add_action('init', 'registrar_menu_navegacao');
