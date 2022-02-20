<?php

function multipage_css(){
    ?>
    <style type="text/css">

      .header-top{ background-color:<?php the_field('header_background', 'option'); ?>}
     


    </style>
    <?php

}
add_action('wp_head', 'multipage_css');