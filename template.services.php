<?php
/* Template Name: Our Service
*/

get_header( ); ?>
<!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <?php echo get_template_part( 'inc/bread-cam' ); ?>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
<div class="container">
    <div class="row">
        <?php $args = array( 'post_type' => 'service', 'orderby'=>'title',
        'posts_per_page' => 6 ); $query = new WP_Query($args);
        while($query->have_posts()){ $query->the_post(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="single-service">
            <?php if(class_exists('ACF')){
                $service_icons=get_field('service_icon');
            }?>
                <i class="<?php echo esc_attr($service_icons);?>"></i>
                <h4><?php the_title();?></h4>
                <?php the_content();?>
            </div>
        </div>
        <?php
    };
    wp_reset_postdata();
 ?>
    </div>
</div>
</section>

<?php get_footer(); ?>