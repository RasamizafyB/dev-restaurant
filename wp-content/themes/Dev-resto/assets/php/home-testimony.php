 <!-- section comment start -->
 <section id='barman' class='section-barman'>
    <img class='hachures-blaches' src="<?php bloginfo('template_url'); ?>/assets/images/hachures-blanches.png" alt="">
    <div class='about'>
        <div class='message-barman text-center'>
            <div class='header-message-barman'>
                <h1><i class="fas fa-quote-right"></i></h1>
            </div>
            <div class='main-message-barman'>
                <p class='text-capitalize'><strong>
                    <?php echo get_field('testimony', 'option'); ?>
                </strong></p>
                <p class='name text-capitalize'>
                    - <?php the_field('author_testimony', 'option'); ?>
                </p>
            </div>
            <div class='footer-message-barman'>
                <i class="fas fa-circle fa-xs" style='color:gray;'></i>
                <i class="fas fa-circle fa-xs icon"></i>
                <i class="fas fa-circle fa-xs" style='color:gray;'></i>
            </div>
        </div>
        <div class='img-barman'>
            <?php if(get_field('image_testimony')): ?>
                <img class='business' src="<?php the_field('image_testimony');?>" alt="the chef">
            <?php else: ?>
                <img class='business' src="<?php bloginfo('template_url'); ?>/assets/images/fauxels.jpg" alt="">
            <?php endif; ?> 
        </div>
    </div>
    <img class='hachureBlaches' src="<?php bloginfo('template_url'); ?>/assets/images/hachureBlanches.png" alt="">
    <img class='hachureGrises' src="<?php bloginfo('template_url'); ?>/assets/images/hachureGrises.png" alt="" style='display:none;'>
</section>
<!-- section comment start -->