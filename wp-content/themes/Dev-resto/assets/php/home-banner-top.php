
    <!-- navbar_start -->
    <?php include 'navbar.php'; ?>
    <!-- navbar_end -->
    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1 title">
        <div class="slider_text">
            <div class='brunch'>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='40px'>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='80px' class='xl'>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='40px'>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='40px'>
                <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='40px'>
            </div>
            <div class="container-title">
                <div class="title_text">
                    <h2><?php the_field('banner_top_subtitle'); ?></h2>
                    <h1 class='text-uppercase'><?php the_field('banner_top_title'); ?></h1>
                </div>
                <div class='check-menu d-flex'>
                    <img src="<?php bloginfo('template_url'); ?>/assets/svg/brunch.svg" alt="bruch"  width='60px'>
                    <a href="<?php the_field('banner_top_link_menu');?>">check our menu</a>
                </div>
            </div>
        </div>
    </div>
