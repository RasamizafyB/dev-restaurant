<!-- section blog start -->
<section id='blog' class='recipes-blog'>
    <div class='container-menu'>
        <div class='title-blog text-center'>
            <h2>Latest updated</h2>
            <h1 class='text-uppercase'>RECIPES BLOG</h1>
        </div>
        <div class='articles'>
            <div class='d-flex justify-content-between card-blog'>
                <?php
                // the query
                    $the_query = new WP_Query(array (
                        'post_type' => 'recipes',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    ));
                ?>
                <!-- un blog -->
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="card card-border mb-4" style="width: 20rem;">
                        <div class='card-img-top top-card'>
                            <img class="img" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                        </div>
                        <div class="card-body carte-body">
                            <h6 class="card-subtitle mb-2 text-muted text-uppercase"><img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="time clock">    <?php the_time("F d, Y"); ?></h6>
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <div class='shortdesc text-justify'><?php the_content(); ?></div><br>
                            <div class='d-flex justify-content-between'>
                                <p>--------------------</p>  
                                <a href="#" class="text-righ text-dark text-uppercase read"><strong>REAd MORE</strong></a>
                            </div>                        
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!-- section blog start -->