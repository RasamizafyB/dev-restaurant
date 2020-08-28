<?php
/*
Template Name: Restaurant Front-Page
Template Post Type: post
*/
?>
<?php 
    get_header(); 
?>
    <header id='header' class='banner-top' style="background: url('<?php bloginfo('template_url'); ?>/assets/images/hachureBlanches.png') no-repeat 0% 104%, url('<?php the_field('image_banner_top'); ?>') no-repeat center;
                                                background-size: auto, cover;">
        <?php include 'assets/php/home-banner-top.php'; ?>
    </header> 
    <main>
        <?php 
            include "assets/php/home-chef.php";
            include "assets/php/home-restaurants.php";
            include "assets/php/home-menu.php";
            include "assets/php/home-testimony.php";
            include "assets/php/home-recipes.php"; 
        ?>   
    </main> 

<?php 
    get_footer()
?>