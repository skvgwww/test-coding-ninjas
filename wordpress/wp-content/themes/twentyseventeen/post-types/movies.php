<?php
function create_movies_post_type() {
    $labels = array(
        'name' => __('Фильмы'),
        'singular_name' => __('Фильмы'),
        'add_new' => _x('Добавить Фильм', 'movies'),
        'add_new_item' => __('Добавить Фильм'),
        'edit_item' => __('Редактировать Фильм'),
        'new_item' => __('Новый Фильм'),
        'all_items' => __('Все Фильмы'),
        'view_item' => __('Редактировать Фильм'),
        'search_items' => __('Найти Фильм'),
        'not_found' => __('Не найдено'),
        'not_found_in_trash' => __('Пусто'),
        'menu_name' => 'Фильмы'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-video-alt',
        'menu_position' => 6,
        'rewrite' => array('slug' => 'movies'),
        //'supports' => array('title', 'excerpt', 'editor', 'thumbnail')
        'supports' => array('title','editor','thumbnail','excerpt','page-attributes', )
    );


    register_post_type('movies', $args);
}
add_action('init', 'create_movies_post_type');

// hook into the init action and call create_movies_taxonomies when it fires
add_action( 'init', 'create_movies_taxonomies' );
function create_movies_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Категории', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Категория', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Искать категорю', 'textdomain' ),
        'all_items'         => __( 'Все категории', 'textdomain' ),
        'parent_item'       => __( 'Родительская категория', 'textdomain' ),
        'parent_item_colon' => __( 'Родительская категория:', 'textdomain' ),
        'edit_item'         => __( 'Ред. категорю', 'textdomain' ),
        'update_item'       => __( 'Обновить категорю', 'textdomain' ),
        'add_new_item'      => __( 'Добвить категорю', 'textdomain' ),
        'new_item_name'     => __( 'Имя новой категории', 'textdomain' ),
        'menu_name'         => __( 'Категория', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );

    register_taxonomy( 'genre', array( 'movies' ), $args );

}
?>
