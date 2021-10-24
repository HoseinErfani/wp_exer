<?php

add_action('admin_menu', 'experts_admin_menu');
add_action('admin_enqueue_scripts', 'experts_add_media_uploader');

function experts_admin_menu()
{
    add_menu_page('تنظیما قالب', 'تنظیما قالب', 'manage_options', 'experts_options', 'experts_page_content');
}

function experts_page_content()
{

    if (isset($_POST['upload-btn'])) {
        $file = $_FILES['upload-file'];
        $uploadPath = wp_upload_dir();

        $file_path = $uploadPath['basedir'] . '/my_manual_uploads\/';
        if (!file_exists($file_path)) {
            wp_mkdir_p($file_path);
        }
        $file_name_parts=explode('.',$file['name']);
        $new_file_name='file'.rand(10000,90000).'.'.end($file_name_parts);

        move_uploaded_file($file['tmp_name'], $file_path.$new_file_name );
    }

    include get_template_directory() . '/templates/admin/menus.php';
}

function experts_add_media_uploader()
{
    wp_enqueue_media();
    wp_enqueue_script('experts-admin-scripts', get_template_directory_uri() . '/assets/js/admin.js', ['jquery'], false, true);
}
