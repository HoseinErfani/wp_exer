<?php



add_action('wp_enqueue_scripts', 'myfunc_add_jscss');
function myfunc_add_jscss()
{
   wp_register_style('my_styles', get_template_directory_uri() . '/assets/css/main.css');
   wp_enqueue_style('my_styles');

   if (is_single()) {
      wp_register_script('my_js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
      wp_enqueue_script('my_js');
   }
}

add_action('after_setup_theme', 'myfunc_setup');


function myfunc_setup()
{
   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');
   add_theme_support('post-formats', ['video', 'audio', 'gallery']);


   add_filter('show_admin_bar', '__return_false');
add_image_size('expert-size',500,500,true);

   register_nav_menu('top-bar', 'menu for theme top bar');
}
include get_template_directory() . '/includes/frontend/post-types.php';
include get_template_directory() . '/includes/frontend/taxonomies.php';
include get_template_directory() . '/includes/modules/widgets.php';

if(is_admin()){
   include get_template_directory() . '/includes/admin/admin.php';
}



function wpdocs_theme_slug_widgets_init()
{
   register_sidebar(
      array(
         'name'          => __('Custom Sidebar', 'textdomain'),
         'id'            => 'sidebar-10',
         'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
         'before_widget' => '<div id="%1$s" class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="widgettitle">',
         'after_title'   => '</h2>',
      )
   );
}

add_action('widgets_init','wpdocs_theme_slug_widgets_init');
