<?php

require 'vendor/autoload.php';

new Monefize\Enqueue\Enqueue;
new Monefize\Customizer\Customizer;
new Monefize\Route\Api\ContactForm;

function getimg($img)
{
    return get_bloginfo('template_url') . "/app/Resources/images/{$img}";
}

function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');
  

if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}

add_theme_support('title-tag');
