<?php


class UserInformation extends WP_Widget
{
    function __construct()
    {
        parent::__construct('UserInformation-Widget', 'UserInformation Widget');
    }

    function widget($args, $instance)
    {
        $user = wp_get_current_user();


        echo $args['before_widget'];
        echo $args['before_title'];
        echo $instance['title'];
        echo $args['after_title'];

        echo 'hello ';
?>
        <a href="#" class="text-success">
            <?php
            echo $user->display_name;
            ?>
        </a>
    <?php


        echo $args['after_widget'];
    }

    function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : 'New title';
    ?>


        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">

            <?php esc_attr_e('Title:', 'text_domain'); ?>

        </label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">



<?php
        return '';
    }

    function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
}

function register_custom_widget()
{
    register_widget('UserInformation');
}
add_action('widgets_init', 'register_custom_widget');
