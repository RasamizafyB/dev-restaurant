 <!-- section menu start -->
 <section id='menu' class='discover-menu'> 
            <div class='container-menu'>
                <div class='menu-grid'>
                    <div class='header-description-menu'>
                        <h2 class='text-uppercase'><?php the_field('subtitle_menu', 'option'); ?></h2>
                        <h1 class='text-uppercase'><?php the_field('title_menu', 'option'); ?></h1>
                    </div>
                    <div class='img-menu'>
                        <div class="img one">
                            <?php if(get_field('image_menu_1')): ?>
                                <img src="<?php the_field('image_menu_1');?>" alt="the chef">
                            <?php else: ?>
                                <img  src="<?php bloginfo('template_url'); ?>/assets/images/shevtsova.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="img two">
                            <?php if(get_field('image_menu_2')): ?>
                                <img src="<?php the_field('image_menu_2');?>" alt="the chef">
                            <?php else: ?>
                                <img  src="<?php bloginfo('template_url'); ?>/assets/images/snapwire.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="img three">
                            <?php if(get_field('image_menu_3')): ?>
                                <img src="<?php the_field('image_menu_3');?>" alt="the chef">
                            <?php else: ?>
                                <img  src="<?php bloginfo('template_url'); ?>/assets/images/boltneva.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="img four">
                            <?php if(get_field('image_menu_4')): ?>
                                <img src="<?php the_field('image_menu_4');?>" alt="the chef">
                            <?php else: ?>
                                <img  src="<?php bloginfo('template_url'); ?>/assets/images/dapurmelodi.jpg" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class='description-menu text-center'>
                        <div class='main-description-menu'>
                            <p><?php the_field('description_menu', 'option'); ?></p>
                        </div>
                        <div class='footer-description-menu'>
                            <a href="#" class='btn btn-dark bouton'>View the full menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section menu start -->