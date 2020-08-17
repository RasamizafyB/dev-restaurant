<?php

    function theme_supports(){
        add_theme_support('title-tag');
    }

    function theme_register_assets(){
        wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'); // permet d'enregistrer le style css
        wp_enqueue_style('bootstrap'); // permet d'utiliser le style
        wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], false, true);
        wp_enqueue_script('bootstrap');
    }
    
    add_action('after_setup_them', 'theme_support');
    add_action('wp_enqueue_scripts', 'theme_register_assets');