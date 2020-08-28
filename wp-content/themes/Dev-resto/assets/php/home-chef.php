<!-- section chef start -->
<section id='chef' class='chef-cuisto'>
    <div class='container-card'>
        <div class="les-cartes">
        <!-- un skill -->
            <div class="card carte">
                <div class='img'>
                    <?php if(get_field('skills_one_img')): ?>
                        <img src="<?php the_field('skills_one_img');?>" alt="quality food">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/quality-food.svg" alt="quality food">
                    <?php endif; ?>    
                </div>
                <div class="card-body text-center carte-body">
                    <h4 class="card-title text-uppercase font-weight-bold title-skill"><?php the_field('skills_one'); ?></h4>
                    <p class="card-text"><?php the_field('skills_one_text'); ?></p>
                </div>
            </div>
        <!-- un skill -->
            <div class="card carte">
                <div class='truc'>
                    <?php if(get_field('skills_two_img')): ?>
                        <img src="<?php the_field('skills_two_img');?>" alt="quality food">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/fastest-delivery.svg" alt="fastest delivery">
                    <?php endif; ?> 
                </div>
                <div class="card-body text-center carte-body">
                    <h4 class="card-title text-uppercase font-weight-bold title-skill"><?php the_field('skills_two');?></h4>
                    <p class="card-text"><?php the_field('skills_two_text');?>.</p>
                </div>
            </div>
        <!-- un skill -->
            <div class="card carte">
                <div class='img'>
                    <?php if(get_field('skills_three_img')): ?>
                        <img src="<?php the_field('skills_three_img');?>" alt="quality food">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/original-recipes.svg" alt="Card image cap">
                    <?php endif; ?>
                </div>
                <div class="card-body text-center carte-body">
                  <h4 class="card-title text-uppercase font-weight-bold title-skill"><?php the_field('skills_three');?></h4>
                  <p class="card-text"><?php the_field('skills_three_text');?></p>
                </div>
            </div>
        </div>
        <!-- chef -->
        <div class='cuisto d-flex'>
            <div class='img-chef'>
                <?php if(get_field('image_chef_cuisto')): ?>
                    <img src="<?php the_field('image_chef_cuisto');?>" alt="the chef">
                <?php else: ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/the-chef.jpg" alt="the chef">
                <?php endif; ?>
            </div>
            <div class='description-chef'>
                <div class='info'>
                    <div class='header-description-chef'>
                        <h2><?php the_field('title_1_chef_cuisto');?></h2>
                        <h1 class='text-uppercase'><?php the_field('title_2_chef_cuisto');?></h1>
                        <p class='subtitle text-uppercase'><strong><?php the_field('subtitle_chef_cuisto');?></strong></p>
                    </div>
                    <div class='main-description-chef'>
                        <p><?php the_field('text_chef_cuisto');?></p>
                    </div>
                    <div class='footer-description-chef'>
                        <p class='subtitle text-uppercase'><strong><?php the_field('signature_subtitle');?></strong></p>
                        <h2 class='text-uppercase'><?php the_field('signature_title');?></h2>
                    </div> 
                </div>                  
            </div>
        </div>
    </div>   
</section>
<!-- section chef end -->