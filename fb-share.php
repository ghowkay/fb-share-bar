<?php 
    /*
    Plugin Name: Facebook Share Bar
    Plugin URI: http://www.github.com/ghowkay/fb-share-bar
    Description: Add beautiful share on facebook button to your website 
    Author: Odubanjo Goke
    Version: 1.0
    Author URI: http://www.github.com/ghowkay
    */


 function ghowkay_add_fb_button($content) {
	if (is_single()) {
		$content .= '<div class="socialBarContainer gallery-social-bar" id="single_social_buttons_holder">
        <div class="social-share-box ">
            <a href="#" class="share-item fb"></a>
            <div class="share-item mr"></div>
        </div>         
    </div>';
	}
	return $content;
}
add_filter ('the_content', 'ghowkay_add_fb_button', 0);




/**
 * Enqueue plugin style-file
 */

function ghowkay_load_font_awesome(){


    wp_register_style( 'ghowkay_font_awsome','//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' );
    wp_enqueue_style( 'ghowkay_font_awsome' );
}

add_action( 'wp_enqueue_scripts', 'ghowkay_load_font_awesome' );

function ghowkay_fb_button_style() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'ghowkay_fb_button_style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'ghowkay_fb_button_style' );
}

add_action( 'wp_enqueue_scripts', 'ghowkay_fb_button_style' );

?>


