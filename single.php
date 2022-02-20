<?php get_header( ); ?>
<!-- Header Area Start -->

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title(); ?></h4>
                    <ul>
                        <li>
                        <a href="<?php echo esc_url(home_url( ));?>">Home</a>
                    </li>/
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</section>

<section class="blog-single pt-100 pb-100">
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8">
            <h2><?php the_title();?></h2>
            <?php the_post_thumbnail(  );?>
            <?php the_content(); ?>
            <div class="comments">

                <?php if ( comments_open() || get_comments_number() ) : comments_template();
                endif; ?>

            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <div class="single-sidebar">
                <?php if(is_active_sidebar( 'sidebar-1' )){
                    dynamic_sidebar( 'sidebar-1' );
                } ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer( ); ?>