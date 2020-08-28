<section class='the-menu'>
    <div class='container-menu'>
        <div class='header-the-menu text-center'>
            <h2 style='margin: 0 0 5% 0; font-size: 42px; font-weight: 400;'>Welcome</h2>
            <h1 class='font-weight-bold text-uppercase' style='font-size: 46px; font-weight: 700;'>the menu</h1>
        </div>
        <div class='body-the-menu text-center' style='margin-top:5%;'>
            <div class='content' style='width:60%; margin:auto;'>

            <!-- starters -->
                <?php
                    $the_query_starters = new WP_Query(array (
                        'post_type' => 'starters',
                        'order'   => 'DESC',
                    ));
                ?>
                <div class='starters'>
                    <div class='title-starters'>
                        <h2 class='text-uppercase font-weight-bold' style='margin-bottom:0;'>starters</h2>
                        <h1>____________</h1>
                    </div>
                    <?php while($the_query_starters->have_posts()): $the_query_starters->the_post(); ?>
                        <div class='body-starters d-flex justify-content-between' style='margin-top:3%;'>
                            <div class='text text-left'>
                                <h4 class='text-uppercase'><?php the_field('title_starters') ?></h4>
                                <p><?php the_field('description_starters') ?></p>
                            </div>
                            <div class='prix'>
                                <h2><?php the_field('prix') ?></h2>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                
            <!-- starters end -->

            <!-- mains -->
                <?php
                    $the_query_mains = new WP_Query(array (
                        'post_type' => 'mains',
                        'order'   => 'DESC',
                    ));
                ?>
                <div class='mains' style='margin-top:15%;'>
                    <div class='title-mains'>
                        <h2 class='text-uppercase font-weight-bold' style='margin-bottom:0;'>mains</h2>
                        <h1>____________</h1>
                    </div>
                    <?php while($the_query_mains->have_posts()): $the_query_mains->the_post(); ?>
                        <div class='body-mains d-flex justify-content-between' style='margin-top:3%;'>
                            <div class='text text-left'>
                                <h4 class='text-uppercase'><?php the_field('title_mains') ?></h4>
                                <p><?php the_field('subtitle_mains') ?></p>
                            </div>
                            <div class='prix'>
                                <h2><?php the_field('prix_mains') ?></h2>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <!-- mains end -->

            <!-- dessert -->
                <?php
                    $the_query_desserts = new WP_Query(array (
                        'post_type' => 'desserts',
                        'order'   => 'DESC',
                    ));
                ?>
                <div class='desserts' style='margin-top:15%;'>
                    <div class='title-desserts'>
                        <h2 class='text-uppercase font-weight-bold' style='margin-bottom:0;'>desserts</h2>
                        <h1>____________</h1>
                    </div>
                    <?php while($the_query_desserts->have_posts()): $the_query_desserts->the_post(); ?>
                        <div class='body-desserts d-flex justify-content-between' style='margin-top:3%;'>
                            <div class='text text-left'>
                                <h4 class='text-uppercase'><?php the_field('title_desserts') ?></h4>
                                <p><?php the_field('subtitle_desserts') ?></p>
                            </div>
                            <div class='prix'>
                                <h2><?php the_field('prix_desserts') ?></h2>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <!-- dessert end -->
            </div>
        </div>
    </div>
</section>