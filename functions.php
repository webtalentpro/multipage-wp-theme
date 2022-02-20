<?php 

require_once('inc/enqueue.php');
require_once('inc/bs4navwalker.php');

require_once('inc/multipage-activation.php');
require_once('inc/class-tgm-plugin-activation.php');



require_once('inc/acf-options.php');
require_once('inc/theme_style_css.php');
require_once('inc/widgets.php');
require_once('inc/pagenav.php');



function multipage_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'halim' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Your Name',
                'multipage'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Your Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="Your Website" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'multipage_comment_placeholders' );

function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'multipage');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'multipage' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field', 20 );




