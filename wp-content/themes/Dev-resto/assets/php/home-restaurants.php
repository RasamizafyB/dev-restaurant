<!-- section restaurants start -->
<section id='our-restaurant' class='restaurants'>
            <div class='container-restau'>
                <div class='header-restaurant text-center'>
                    <h2>Discover our franchise</h2>
                    <h1 class='text-uppercase'>OUR RESTAURANTS</h1>
                </div>
                <div class='restaurant'>

                    <?php
                    // the query
                        $the_query_restaurant = new WP_Query(array (
                            'post_type' => 'restaurant',
                            'posts_per_page' => 3,
                            'order'   => 'DESC',
                        ));
                    ?>

                <!-- un restaurant -->
                <?php while($the_query_restaurant->have_posts()): $the_query_restaurant->the_post(); ?>
                    <div class='restau d-flex'>
                        <div class='description-restau'>
                            <div class='info-restau text-center'>
                                <div class='header-description-restau'>
                                    <h2><?php the_field('subtitle_1'); ?></h2>
                                    <h1><?php the_field('title_1'); ?></h1>
                                </div>
                                <div class='main-description-restau'>
                                    <p><?php the_field('description_restaurant_1'); ?></p>
                                </div>
                                <div class='footer-description-restau'>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-dark bouton">More infos</a>
                                </div> 
                            </div>                  
                        </div>
                        <div class='img-restau'>
                            <img src="<?php the_field('image_restaurant'); ?>" alt="the chef">
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- section restaurants end -->