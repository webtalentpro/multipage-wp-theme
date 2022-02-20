<?php get_header(); ?>
<!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(  home_url( ))?>">Home</a>
                        </li>
                        /
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <?php echo the_post_thumbnail('workflows-thumbnail'); ?>
                <?php the_content(); ?>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project gallery</h4>
                    </div>

                    <?php if(class_exists('ACF')){ $gallerys=get_field('portfolio_gallery');} foreach($gallerys as $gallery){
                    ?>

                    <div class="col-xl-4">
                        <div class="project-gallery">
                            <img src="<?php echo esc_url($gallery['url']); ?>">
                        </div>
                    </div>

                    <?php } ?>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project overview</h4>
                        <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/jssO8-5qmag"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>

                    <ul>
                        <?php 
                        if(class_exists('ACF')){$technology=get_field('technology_used');} 
                        foreach($technology as $technolog){ ?>

                        <li>
                            <i class="fa fa-arrow-right"></i>
                            <?php echo $technolog['technology'];  ?>
                        </li>

                        <?php  } ?>

                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <?php if( class_exists('ACF')){$technology=get_field('project_features');}
                         foreach($technology as
                        $technolog){ ?>
                        <li>
                            <i class="fa fa-arrow-right"></i>
                            <?php echo $technolog['feature'];  ?>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>