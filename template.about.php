<?php 
/* Template Name: About Page */
get_header() ?>
<!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <?php echo get_template_part( 'inc/bread-cam' ); ?> 

            </div>
        </div>
    </div>
</section>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <div class="page-title">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-5">
            <?php if( class_exists('ACF')){
                  $about_features=get_field('about_features'); 
                 foreach($about_features as $about){
                     ?>
                 <div class="single_about">
                     <i class="fa <?php echo esc_attr($about['icon']); ?>"></i>
                     <h4><?php echo $about['title']; ?></h4>
                     <p><?php echo $about['description']; ?>
                         
                     </p>
                 </div>
                 <?php } 
            }?>

               
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>