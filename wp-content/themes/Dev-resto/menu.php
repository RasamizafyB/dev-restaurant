<?php
/*
Template Name: Menu
Template Post Type: page
*/
?>
<?php get_header() ?>

    <header id='header' class='banner-top' style="background: url('<?php bloginfo('template_url'); ?>/assets/images/hachureGrises.png') no-repeat 0% 104%, url('<?php bloginfo('template_url'); ?>/assets/images/plat-3.jpg') no-repeat center;
                                                background-size: auto, cover;
                                                height:90vh;">
        <?php include 'assets/php/menu-banner-top.php'; ?>
    </header> 
    <main>
        <?php 
            include 'assets/php/menu-main.php'; 
            include 'assets/php/home-recipes.php'
        ?>
    </main>
<?php get_footer() ?>