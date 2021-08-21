<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Redes_Sociais_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'redes-sociais-widget',
            'description' => 'Widget para mostrar as Redes Sociais.'
        );
        
        parent::__construct('redes_sociais','&nbsp;Redes Sociais',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = '' : null;
 
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
        isset($instance['pinterest']) ? $pinterest = $instance['pinterest'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
        $instance['instagram'] = (!empty($new_instance['instagram']) ) ? strip_tags($new_instance['instagram']) : '';
        $instance['pinterest'] = (!empty($new_instance['pinterest']) ) ? strip_tags($new_instance['pinterest']) : '';
 
        return $instance;
    }
    
    public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $linkedin = $instance['linkedin'];
        $instagram = $instance['instagram'];
        $pinterest = $instance['pinterest'];
 
        // social profile link
        $facebook_profile = '<li><a href="' . $facebook . '" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>';
        $twitter_profile = '<li><a href="' . $twitter . '" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>';
        $linkedin_profile = '<li><a href="' . $linkedin . '" target="_blank" title="Linked In"><i class="fa fa-linkedin"></i></a></li>';
        $instagram_profile = '<li><a href="' . $instagram . '" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>';
        $pinterest_profile = '<li><a href="' . $pinterest . '" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>';
 
        echo $args['before_widget'];
        
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<ul class="nav">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo (!empty($instagram) ) ? $instagram_profile : null;
        echo (!empty($pinterest) ) ? $pinterest_profile : null;
        echo '</ul>';
        
        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
    register_widget('Redes_Sociais_Widget');
});

 ?>