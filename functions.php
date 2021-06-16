<?php

function iromero_scripts_pito(){
    if(is_page('pito'))
    {
        wp_enqueue_style('pito-css',get_theme_file_uri('/css/pito.css'));
    }else{
        wp_enqueue_style('real-css',get_stylesheet_uri());
    }    
}
add_action('wp_enqueue_scripts','iromero_scripts_pito');