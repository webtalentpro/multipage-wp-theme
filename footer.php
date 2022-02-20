<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><?php the_field('cta_title', 'option'); ?>
                    <span><?php the_field('cta_subtitle', 'option'); ?></span>
                </h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php the_field('button_link', 'option'); ?>" class="box-btn"><?php the_field('button_text', 'option'); ?>
                    <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
               
               
            <?php if(is_active_sidebar( 'footer-3 ')){ dynamic_sidebar( 'footer-3') ; } ?>
               
               
            </div>
            <div class="col-lg-2 col-md-6">
                <?php if(is_active_sidebar( 'footer-1 ')){ dynamic_sidebar( 'footer-1') ; } ?>
            </div>
            <div class="col-lg-4 col-md-6">
                <?php if(is_active_sidebar( 'footer-2 ')){ dynamic_sidebar( 'footer-2') ; } ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer contact-box">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            245 Street, Sydney, Australia</li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            +23 0034 5567 341</li>
                        <li>
                            <i class="fa fa-phone"></i>
                            +23 0034 5567 341</li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            info@demo.com</li>
                        <li>
                            <i class="fa fa-globe"></i>
                            www.demo.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <p><?php the_field('footer_copyright', 'option'); ?></p>
            </div>
            <div class="col-md-6 text-right">
                <ul>

                    <?php $footer_social=get_field('footer_social', 'option');
                    foreach($footer_social as $social){ ?>

                    <li>
                        <a href="<?php echo $social['link']; ?>">
                            <i class="fa <?php echo $social['icon']; ?>"></i>
                        </a>
                    </li>

                    <?php   }   ?>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<?php wp_footer(  ); ?>
</body>
</html>