<?php


    add_theme_support('post-thumbnails');
    

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    function theme_register_assets(){
        wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'); // permet d'enregistrer le style css
        wp_enqueue_style('bootstrap'); // permet d'utiliser le style
        wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], false, true);
        wp_enqueue_script('bootstrap');
        wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'); // permet d'enregistrer font-awesome
        wp_enqueue_style('font-awesome');
    }

    function create_post_type(){
        register_post_type('recipes',  array(
            'labels' => array(
                'name' => __('Recipes'),
                'singular_name' => __('Recipe')
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'extrait', 'thumbnail' )
        ));
        register_taxonomy('Cathegory', 'recipes', array(
            'hierarchical' => true,
            'label' => 'Cathegory',
            'query_var' => true,
            'rewrite' => true
        ));
    }

    function enregistre_mon_menu() {
        register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
    }
    
    function devresto_init(){
    	register_taxonomy('meal', 'recipes', [
    		'labels' => [
                'name' => 'Meal',
                'singular_name'     => 'Meal',
                'plural_name'       => 'Meals',
                'search_items'      => 'Rechercher des meals',
                'all_items'         => 'Tous les meals',
                'edit_item'         => 'Editer le meal',
                'update_item'       => 'Mettre à jour le meal',
                'add_new_item'      => 'Ajouter un nouveau meal',
                'new_item_name'     => 'Ajouter un nouveau meal',
                'menu_name'         => 'Meal',
            ],
            'show_in_rest' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_menu' => true, 

    	]);
    }

    function fonctionAppelCss(){
    wp_enqueue_style('style_de_mon_parent', get_template_directory_uri() . '/archive.css'  );
    }

    function devresto_supports () {
    	add_theme_support("title-tag");
    	add_theme_support('post-thumbnails');
    	add_image_size('card-image-reciep', 645, 400, true);
    }

    function devresto_pagination (){
    	 $pages = paginate_links(['type' => 'array']);
    
        if ($pages === null) {
            return;
        }
        echo '<nav class="navPagination" aria-label="Pagination">';
        echo '<ul class="pagination justify-content-center">';
        foreach ($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = 'page-item numberPageContent';
            if ($active) {
                $class .= ' active';
            }
            echo '<li class="' . $class . '">';
            echo str_replace('page-numbers', 'page-link styleItemsPagination', $page);
            echo '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }

    add_action('wp_enqueue_scripts', 'theme_register_assets');
    add_action('init', 'create_post_type');
    add_action( 'init', 'enregistre_mon_menu' );
    add_action('init', 'devresto_init');
    add_action('wp_enqueue_scripts', 'fonctionAppelCss');
    add_action('after_setup_theme', 'devresto_supports');
    
