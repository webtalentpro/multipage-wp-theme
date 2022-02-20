<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>" class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->

        <?php wp_head(  ); ?>
    </head>
    <body <?php body_class( ); ?>>
    <?php wp_body_open(); ?>
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="header-left">
                            <a href="mailto:<?php the_field('email'); ?>">
                                <i class="fa fa-envelope"></i>
                                <?php the_field('email', 'option'); ?></a>
                            <a href="tel:<?php the_field('phone'); ?>">
                                <i class="fa fa-phone"></i>
                                <?php the_field('phone', 'option'); ?></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="header-social">

                            <div class="header-social">
                                <?php if($header_icons = get_field('header_social', 'option')){ foreach
                                ($header_icons as $header_social){ ?>
                                <a href="<?php echo $header_social['link'];?>">
                                    <i class="fa <?php echo $header_social['icon'];?>"></i>
                                </a>
                                <?php   } }?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header Area Start -->
            <header class="header header-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-md navbar-light">
                               
                            <a class="navbar-brand" href="<?php echo site_url();?>"><?php echo esc_html__('Multipage', 'multipage');?></a>
                               

                              

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php wp_nav_menu( array( 'menu' => 'primary_menu', 'theme_location'=>
                                'primary_menu', 'container'=> 'div', 'container_id'=>'navbarNav',
                                'container_class'=> 'collapse navbar-collapse ml-auto mainmenu', 'menu_id'=>
                                false, 'menu_class'=> 'navbar-nav ml-auto', 'depth'=> 2, 'fallback_cb'=>
                                'bs4navwalker::fallback', 'walker'=> new bs4navwalker(), ) ); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </header>