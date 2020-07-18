<?php

    require_once('wp-bootstrap-navwalker.php');

    add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        }
    endif;

    function register_wp_sidebars() {
        register_sidebar(
            array(
                'id' => 'right_sidebar', // уникальный id
                'name' => 'Правая колонка', // название сайдбара
                'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
                'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h3>
                'after_title' => '</h3>'
            )
        );
    }

    add_action( 'widgets_init', 'register_wp_sidebars' );
?>