<?php 

/* Template Name:portfolio

*/
get_header() ?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

            <?php echo get_template_part( 'inc/bread-cam' ); ?>
               

            </div>
        </div>
    </div>
</section>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio-menu mb-40 text-center">
                    <button class="active" data-filter="*">ALL</button>

                    <?php $cats=get_terms( 'portfolio-cat'); foreach($cats as $cat){ ?>
                    <button data-filter=".<?php echo $cat->slug; ?>" class="">
                        <?php echo $cat->name ?>
                    </button>

                    <?php  } ?>

                </div>
            </div>
        </div>
        <div class="row grid no-gutters">

            <?php $args=array('post_type'=>'portfolio_area', 'post_per_page'=>9); $query=new
            WP_Query($args); while($query->have_posts( )){ $query->the_post(); ?>

            <div
                class="col-md-4 grid-item
               <?php
                     $portfolio_items = get_the_terms(get_the_ID(), 'portfolio-cat');
                     foreach ($portfolio_items as $portfolio_item){
                        echo $portfolio_item->slug.' ';
                     }
                  ?>">
                <div class="single-portfolio">
                    <?php echo the_post_thumbnail()?>
                    <div class="portfolio-hover">
                        <div class="portfolio-content">
                            <h3>
                                <a href="<?php the_permalink(  ); ?>" class="">
                                    <i class="fa fa-link"></i>
                                    <?php the_title()?>
                                    <span><?php the_field('portfolio_designation'); ?></span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(  ); ?>
        </div>
    </div>
</section>
<!-- projectss Area End -->

<?php get_footer(); ?>