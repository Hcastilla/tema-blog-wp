<?php

    /* archivos css y js */
    function srcode_css_js(){

        /* Estilos */
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('materialize', get_stylesheet_directory_uri() . '/css/materialize.min.css');
        wp_enqueue_style('estilos', get_stylesheet_directory_uri() . '/css/estilos.css');

        wp_enqueue_style( 'material-icons','https://fonts.googleapis.com/icon?family=Material+Icons');


        /* Scripts */
        wp_enqueue_script('jquery3', get_stylesheet_directory_uri() . '/js/jquery.js', null, null, 'body');
        wp_enqueue_script('matielizecssjs', get_stylesheet_directory_uri() . '/js/materialize.min.js', null, null, 'body');
        wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', null, null, 'body');
        
    }


    /* Fuentes */
    function srcode_fonts() {
        wp_register_style('Dosis', 'http://fonts.googleapis.com/css?family=Dosis');
        wp_enqueue_style( 'Dosis');
	}


    /* funcion de wp para llamar  la funcion srcode_fonts */
    add_action('wp_print_styles', 'srcode_fonts');


    /* funcion de wp para llamar  la funcion srcode_css_js */
    add_action('wp_enqueue_scripts', 'srcode_css_js');


    /* Creas  Menús*/
    register_nav_menus(array(
        'menu_principal' => __('Menú Principal', 'Srcode')
    ));


    /* Extras para el tema*/
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );


    
    
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
?>