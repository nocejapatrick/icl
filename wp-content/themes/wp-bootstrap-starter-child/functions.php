<?php 


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function wpb_add_google_fonts() {
   wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', false ); 
   wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ),'',true );

}
    
   add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
