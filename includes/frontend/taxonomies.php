<?php



add_action('init','register_author_taxonomoy');
function register_author_taxonomoy(){

    $args=array(
        'label'      =>__('Author','textdomain'),
        'public'     =>true,
        'rewrite'    =>true,
        'hierarchical'=>false
    );
    register_taxonomy('Author','book',$args);
}