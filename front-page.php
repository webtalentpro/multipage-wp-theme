<?php get_header( ); ?>
<!-- Header Area Start -->
<!-- Slider Area Start -->
<section class="slider-area" id="home">
    <div class="slider owl-carousel">
        <?php
        query_posts('post_type=slider&post_per_page=3&post_status=publish&order=ASC&paged='.
        get_query_var('post') );?>
        <?php if(have_posts(  )) : ?>
        <?php while(have_posts(  )):the_post(  ); ?>
        <div
            class="single-slide"
            style="background-image:url('<?php the_post_thumbnail_url( )?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <?php if(class_exists('ACF')){
                                    $sub_title= get_field('sub-title');
                                    $btn_text= get_field('slider_btn_text');
                                    $btn_text_url= get_field('btn_url');
                                    
                                }?>
                              
                                <h4>
                                    <?php echo $sub_title; ?>
                                </h4>
                              

                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>

                                <?php if($btn_text){ ?>
                                <a href="<?php echo esc_url($btn_text_url); ?>" class="box-btn"><?php echo $btn_text; ?>
                                    <i class="fa fa-angle-double-right"></i>
                                </a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(  ); ?>
        <?php endif; ?>
    </div>
</section>
<!-- Slider Area Start -->
<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">

            <?php if(class_exists('ACF')){
                $about_title= get_field('about_section', 'option');

            }?>
       
                <h3>
                    <span><?php echo $about_title['sub_title']; ?></span>
                    <?php echo $about_title['title']; ?></h3>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo $about_title['description']; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about">
                    <?php
                    if(class_exists('ACF')) {$about_contents= get_field('about_content', 'option');} ?>
                    <div class="page-title">
                        <h4><?php echo $about_contents['heading'];  ?></h4>
                    </div>

                    <p>
                        <?php echo $about_contents['content']; ?>

                    </p>
                    <a href="<?php echo esc_url( $about_contents['button_url'] ) ; ?>" class="box-btn"><?php echo $about_contents['button_text']; ?>
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <?php 
                if(class_exists('ACF')) {$features=get_field('about_feature', 'option');}
                     foreach($features as
                $feature){ ?>

                <div class="single_about">
                    <i class="fa <?php echo esc_attr($feature['icon']); ?>"></i>
                    <h4><?php echo $feature['title']; ?></h4>
                    <p><?php echo $feature['discription']; ?>

                    </p>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- About Area End -->
<!-- Choose Area End -->
<section class="choose">
    <div class="container">
        <div class="row pt-100 pb-100">
            <div class="col-md-6">
                <div class="faq">
                    <div class="page-title">
                        <?php if(class_exists('ACF')){
                            $faq_title=get_field('faq_title', 'option');
                            
                        }?>
                        <h4><?php echo $faq_title; ?></h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <?php $faq_tab=get_field('faqs', 'option'); $i=0; foreach($faq_tab as $tab){
                        $i++; ?>

                        <div class="card">
                            <div class="card-header" id="heading<?php echo $i; ?>">
                                <h5 class="mb-0">
                                    <button
                                        class="btn btn-link"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#collapse<?php echo $i; ?>"
                                        aria-expanded="true"
                                        aria-controls="collapse<?php echo $i; ?>">
                                        <?php echo $tab['title']; ?>
                                    </button>
                                </h5>
                            </div>
                            <div
                                id="collapse<?php echo $i; ?>"
                                class="collapse <?php if($i== 1){echo 'show';} ?>"
                                aria-labelledby="heading<?php echo $i; ?>"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <?php echo $tab['description']; ?>

                                </div>
                            </div>
                        </div>
                        <?php }  ?>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="skills">
                    <div class="page-title">
                        <?php if(class_exists('ACF')){
                            $skill_title=get_field('skill_title', 'option');
                        }?>
                        <h4><?php echo $skill_title ?></h4>
                    </div>

                    <?php if(class_exists('ACF')){ $skills_set=get_field('skills', 'option');} foreach($skills_set as $set){?>

                    <div class="single-skill">
                        <h4><?php echo $set['title']; ?></h4>
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 90%;"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"><?php echo $set['number']; ?></div>
                    </div>
                    <?php  } ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Choose Area End -->
    <!-- Services Area Start -->
    <section class="services-area pt-100 pb-50" id="services">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
                    <?php if(class_exists('ACF')){ $service=get_field('service_section', 'option'); }?>
                    <h3>
                        <span><?php echo $service['sub_title'];?></span>
                        <?php echo $service['title'];?></h3>
                </div>
                <div class="col-md-6">
                    <p><?php echo $service['description'];?>

                    </p>
                </div>
            </div>
            <div class="row">

                <?php $args = array( 'post_type' => 'service', 'orderby'=>'title',
                'posts_per_page' => 6 ); $query = new WP_Query($args);
                while($query->have_posts()){ $query->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">

                    <?php if(class_exists('ACF')){ $servicess=get_field('service_icon');}?>
                        <i class="<?php echo esc_attr( $servicess );?>"></i>
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
    <!-- Services Area End -->

    <!-- Counter Area End -->
    <section class="counter-area">
        <div class="container-fluid">
            <div class="row">

                <?php $args = array( 'post_type'=>'counters', 'orderby'=>'title',
                'post_per_page'=> 4); $query=new WP_Query($args); while($query->have_posts( )){
                $query->the_post( ); ?>
                <div class="col-md-3">
                    <div class="single-counter">
                        <?php if(class_exists('ACF')){
                            $counter=get_field('counter_icon');
                            $counter_num=get_field('counter_number');
                       

                        } ?>
                        <?php if($counter){ ?>
                        <h4>
                            <i class="<?php echo esc_attr( $counter ); ?>"></i>
                            <span class="counter"><?php echo $counter_num; ?></span><?php the_title(); ?></span>
                    </h4>
                    <?php } ?>
                </div>
            </div>

            <?php }; wp_reset_postdata(  ); ?>
        </div>
    </div>
</section>
<!-- Counter Area End -->
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <?php if(class_exists('ACF')) {$team=get_field('team_section', 'option');} ?>
                <h3>
                    <span><?php echo $team['sub_title']; ?></span>
                    <?php echo $team['title']; ?></h3>
            </div>
            <div class="col-md-6">
                <p><?php echo $team['description']; ?>

                </p>
            </div>
        </div>
        <div class="row">
            <?php $args=array('post_type'=>'teams', 'post_per_page'=>3); $query=new
            WP_Query($args); while($query->have_posts( )){ $query->the_post(); ?>
            <div class="col-md-4">
                <div class="single-team">
                    <?php echo the_post_thumbnail( ); ?>
                    <div class="team-hover">
                        <div class="team-content">
                        <?php if(class_exists('ACF')){
                            $team_job_title=get_field('job_title'); 

                            $team_facebook_icon=get_field('facebook'); 
                            $team_facebook_icon_url=get_field('facebook_url'); 

                            $team_twitter_icon=get_field('twitter'); 
                            $team_twitter_icon_url=get_field('twitter_url'); 

                            $team_linkedin_icon_url=get_field('linkedin_url'); 
                            $team_linkedin_icon=get_field('linkedin'); 
                           
                        }?>
                            <h4>
                                <?php the_title(); ?>
                                <span>
                                    <?php echo $team_job_title; ?></span>
                            </h4>
                            <ul>
                                <?php if($team_facebook_icon){?>
                                <li>
                                    <a href="<?php echo esc_url( $team_facebook_icon_url)?>">
                                        <i class="<?php echo esc_attr( $team_facebook_icon ) ?>"></i>
                                    </a>
                                </li>
                                <?php } ?>

                                <?php if($team_twitter_icon){?>
                                <li>
                                    <a href="<?php echo esc_url( $team_twitter_icon_url); ?>">
                                        <i class="<?php echo esc_attr( $team_twitter_icon ) ?>"></i>
                                    </a>
                                </li>
                                <?php } ?>

                                <?php if($team_linkedin_icon){?>
                                <li>
                                    <a href="<?php echo esc_url( $team_linkedin_icon_url)?>">
                                        <i class="<?php echo esc_attr( $team_linkedin_icon ) ?>"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php }; wp_reset_postdata(  ); ?>
        </div>
    </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->

<section class="testimonial-area pb-100 pt-100" id="testimonials">

    <div class="container">
        <div class="row section-title white-section">
            <div class="col-md-6 text-right">
                <?php if(class_exists('ACF')){ $testimonial_section=get_field('testimonial_section', 'option');} ?>
                <h3>
                    <span><?php echo $testimonial_section['sub_title']; ?></span>
                    <?php echo $testimonial_section['title']; ?></h3>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo $testimonial_section['description']; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials owl-carousel">
                    <?php $args=array('post_type'=>'testimonial', 'post_per_page'=>3); $query=new
                    WP_Query($args); while($query->have_posts( )){ $query->the_post( ); ?>
                    <div class="single-testimonial">
                        <div class="testi-img">


                            <?php echo the_post_thumbnail(); ?>

                        </div>
                        <?php  the_content(); ?>
                        <?php if(class_exists('ACF')){ $testimonial=get_field('job_title');}?>

                        <h4>
                            <?php the_title(); ?>
                            <span><?php echo $testimonial; ?></span>
                        </h4>
                    </div>

                    <?php }; wp_reset_postdata(  ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonilas Area End -->
<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
    <div class="container">
        <div class="row section-title">
            <div class="col-md-6 text-right">
                <?php if(class_exists('ACF')){ $blog=get_field('blog_news', 'option');} ?>
                <h3>
                    <span><?php echo $blog['sub_title']; ?></span>
                    <?php echo $blog['title']; ?></h3>
            </div>
            <div class="col-md-6">
                <p>
                    <?php echo $blog['description']; ?>
                </p>
            </div>
        </div>
        <div class="row">

            <?php $args=array( 'post_type'=>'post', 'posts_per_page'=> 3, 'order'=> 'ASC',
            'orderby'=> 'title' ); $query=new WP_Query($args); while($query->have_posts( )){
            $query->the_post( ); ?>

            <div class="col-md-4">
                <div class="single-blog">

                    <?php  echo the_post_thumbnail( ); ?>

                    <div class="post-content">
                        <div class="post-title">
                            <h4>
                                <a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                        <div class="pots-meta">

                            <ul>
                                <li>
                                    <?php the_date(''); ?>
                                </li>
                                <li>
                                  
                                        <?php the_category(',' ); ?>
                                </li>
                                <li>
                                    <a href="<?php the_permalink(  ); ?>"><?php the_author('');?></a>
                                </li>
                            </ul>

                        </div>

                        <?php the_excerpt(  ); ?>

                    </div>
                </div>
            </div>
            <?php }; wp_reset_postdata(  ); ?>

           
        </div>
    </div>
</section>
<!-- Latest News Area End -->

<?php get_footer(  ); ?>