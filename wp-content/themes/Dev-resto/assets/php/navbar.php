        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg pt-5" id="mainNav">
            <div class='container-navbar d-flex'>
                <h1><a class="navbar-brand text-white title-banner text-uppercase" href="<?php bloginfo('template_url'); ?>/page-accueil/"><?php bloginfo('name');?></a></h1>
                <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarResponsive">
                    <ul class="navbar-nav li-navbar">
                        <li class="nav-item"><a class="nav-link text-white" style="width:100px;" href="<?php bloginfo('template_url'); ?>/page-accueil/"><img src="<?php bloginfo('template_url'); ?>/assets/svg/home-minimal.svg" alt="home" height="20px" width='20px'></a></li>
                        <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="#">Our Restaurants</a></li>
                        <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php bloginfo('template_url'); ?>/menu/">Menu</a></li>
                        <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php bloginfo('template_url'); ?>/archive/">Recipes</a></li>
                        <li class="nav-item"><a class="nav-link order font-weight-bold text-uppercase" style="width:125px;" href="<?php bloginfo('template_url'); ?>/order/">order</a></li>
                        <li class="nav-item"><a class="nav-link text-white" style="width:100px;" href="<?php bloginfo('template_url'); ?>/order/"><img src="<?php bloginfo('template_url'); ?>/assets/svg/supermarket.svg" alt="home" height="20px" width='20px'></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar-tablet navbar-expand-lg pt-5" id="mainNav">
            <div class='container-navbar d-flex'>
                <h1><a class="navbar-brand js-scroll-trigger text-white title-banner text-uppercase" href="#banner-top"><?php the_field('name_restaurant') ?></a></h1>
                <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarResponsive">
                    <ul class="navbar-nav li-navbar">
                        <li class="nav-item d-flex"><a class="nav-link text-white font-weight-bold hamburger-open" href="#">Menu</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar end -->
        
        <?php include 'hamburger.php'; ?>

        