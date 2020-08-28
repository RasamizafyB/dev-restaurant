<?php
/*template Name: footer */
?>
    <!-- section subscribe start -->
    <div id='subscribe' class='newsletter'>
        <div class='container-join'>
            <div class='join-newsletter'>
                <div class='join'>
                    <h1 class='text-uppercase'>
                        join our <br />
                        newsletter
                    </h1>
                </div>
                <div class='mail text-right'>
                    <form action="" method="" class='submit-mail'>
                        <input type="email" name='email' class='input' placeholder='    Your Email Adress'>
                        <input type="submit" name='submit' class='btn btn-light submit font-weight-bolder' value='SUBSCRIBE'>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section subscribe start -->
<footer>
    <img class="footer-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-noires.png" alt="">
    <div class="footer-container">
    
        <div class="footer-info">
            <h2><?php echo bloginfo('name') ;?></h2>
            <div class="footer-info-text">
                
                <p><?php echo get_field('description', 'option') ;?></p>
            </div>
            <div class="footer-info-social">
                <a href="<?php echo get_field('facebook', 'option') ;?>" class="footer-fb"><img src="<?php bloginfo('template_url'); ?>/assets/svg/facebook.svg" alt=""></a>
                <a href="<?php echo get_field('twitter', 'option') ;?>" class="footer-twitter"><img src="<?php bloginfo('template_url'); ?>/assets/svg/twitter.svg" alt=""></a>
                <a href="<?php echo get_field('insta', 'option') ;?>" class="footer-insta"><img src="<?php bloginfo('template_url'); ?>/assets/svg/instagram.svg" alt=""></a>
                <a href="<?php echo get_field('linkedin', 'option') ;?>" class="footer-linkedin"><img src="<?php bloginfo('template_url'); ?>/assets/svg/linkedin.svg" alt=""></a>
            </div>
        </div>
        <div class="footer-contact-hour">
            <div class="footer-open">
                <h3>Open Hours</h3>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Mondays</p>
                            <p class='day-line'><hr></p>
                            <p><?php echo get_field('monday_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Tue-Fri</p>
                            <p><hr></p>
                            <p><?php echo get_field('tue_fri_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Sat-Sun</p>
                            <p><hr></p>
                            <p><?php echo get_field('sat_sun_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Public Holidays</p>
                            <p><hr></p>
                            <p><?php echo get_field('holiday_hour', 'option');?></p>
                    </div>
                </div>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/call(10).svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('phone', 'option');?></p>
                    </div>
                </div>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                    <img src="<?php bloginfo('template_url'); ?>/assets/svg/place(14).svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('street_adress', 'option');?></p>
                        <p><?php echo get_field('postalcode_adress', 'option');?></p>
                        <p><?php echo get_field('country_adress', 'option');?></p>
                    </div>
                </div>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                    <img src="<?php bloginfo('template_url'); ?>/assets/svg/mail-1.svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('mail', 'option');?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-insta">
            <h3>Instagram</h3>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_1', 'option'); ?>" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_2', 'option'); ?>" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_3', 'option'); ?>" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_4', 'option'); ?>" alt="">   
            </div>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_5', 'option'); ?>" alt="">   
            </div>
            <div class="footer-imgbox">
                <img src="<?php the_field('insta_6', 'option'); ?>" alt="">   
            </div>
        </div>
        <div class="footer-copyright">
            <hr color='rgb(155,155,155)'>
            <p>© 2020 All Rights Reserved. Designed By Salade De Pâtes Surtout Avec Des Anchois Studio</p>
        </div>

    </div>

</footer>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/hamburger-menu.js"></script>
</body>
</html>