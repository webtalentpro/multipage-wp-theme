<?php 
/*  Template Name:Blog Page */
get_header();
 ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="breadcumb">
                <h2 class="search_title"><?php printf(__('Search Results for : %s', 'learning'), get_search_query( ));?></h2>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url( ));?>">Home</a>
                        </li>
                        /
                        <li><?php the_search_query(  );  ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
        <div class="row">
            <?php while(have_posts()){ the_post(); ?>

            <div class="col-md-4">
                <div class="single-blog">
                    <?php echo the_post_thumbnail( 'post-thumbnail'); ?>
                    <div class="post-content">
                        <div class="post-title">
                            <h4>
                                <a href="<?php the_permalink(  );?>"><?php the_title(  );?></a>
                            </h4>
                        </div>
                        <div class="pots-meta">
                            <ul>
                                <li>
                                    <a href="<?php the_permalink(  ); ?>"><?php the_date(''); ?></a>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(  ); ?>">
                                        <?php the_category(',' ); ?></a>
                                </li>
                                <li>
                                    <?php the_author_posts_link(  );?>
                                </li>
                            </ul>
                        </div>
                        <?php the_excerpt(  ); ?>

                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(  ) ?>
              
 </div>
    </div>
</section>

<?php get_footer( ); ?>