<?php
/*
Plugin Name: Custom Post Type Lojas
Description: Plugin para adicionar o Custom Post Type Lojas com campos personalizados para informações básicas.
Version: 1.0
Author: Seu Nome
*/

// Registra o Custom Post Type "Lojas"
function cpt_lojas_init() {
    $labels = array(
        'name' => 'Lojas',
        'singular_name' => 'Loja',
        'menu_name' => 'Lojas',
        'name_admin_bar' => 'Loja',
        'add_new' => 'Adicionar Nova',
        'add_new_item' => 'Adicionar Nova Loja',
        'new_item' => 'Nova Loja',
        'edit_item' => 'Editar Loja',
        'view_item' => 'Ver Loja',
        'all_items' => 'Todas as Lojas',
        'search_items' => 'Procurar Lojas',
        'not_found' => 'Nenhuma loja encontrada.',
        'not_found_in_trash' => 'Nenhuma loja encontrada na lixeira.'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true
    );

    register_post_type('loja', $args);
}
add_action('init', 'cpt_lojas_init');
