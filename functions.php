<?php

function singular_register_styles():void{

    wp_enqueue_style( 'singular_bootstrap', get_template_directory_uri(  ).'/style.css', array(), '1.0.0', 'all' );
}

