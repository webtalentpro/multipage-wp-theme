<?php
/* Template Name: Gallery Page */
get_header(); ?>
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

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php $args=array('post_type'=>'galleryes', 'post_per_page'=> 12); $query=new
            WP_Query($args); while($query->have_posts( )){ $query->the_post( ); ?>

            <div class="col-xl-4">
                <div class="single-gallery">
                
                      <?php echo esc_url(the_post_thumbnail( ))  ?>
                   
                    <div class="gallery-hover">
                        <div class="gallery-content">
                            <?php  if(class_exists('ACF')){$big_image=get_field('gallery_big_image'); }?>
                            <h3>
                                <a
                                    href="<?php echo  esc_url($big_image['url']);?>"
                                    class="gallery">
                                    <i class="fa fa-plus"></i>
                                   <?php the_title();  ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(  ); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>