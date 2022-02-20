<?php 

/* Template Name:Full Width */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        
        <?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'multipage' ),
					'after'  => '</div>',
				)
			);
			?>

        </div>
    </div>
</div>





<?php get_footer()?>