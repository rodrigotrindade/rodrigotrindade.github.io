<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   03-09-2019 22:06:44
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 09-01-2020 16:22:37
 */
?>
<?php

class FotoQuadroLateral_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'fotoQuadroLateral-widget',
            'description' => 'Widget para mostrar a foto do quadro lateral.'
        );
        
        parent::__construct('fotoquadrolateral','<span>&nbsp;Foto Quadro Lateral</span>',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['fotolateral']) ? $fotolateral = $instance['fotolateral'] : '';
?>
        <p>
            <label for="<?php echo $this->get_field_id('fotolateral'); ?>"><?php _e('URL Foto Lateral:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('fotolateral'); ?>" name="<?php echo $this->get_field_name('fotolateral'); ?>" type="text" value="<?php echo esc_attr($fotolateral); ?>">
        </p>
        <p></p>
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['fotolateral'] = (!empty($new_instance['fotolateral']) ) ? strip_tags($new_instance['fotolateral']) : '';
        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $fotolateral = $instance['fotolateral'];
        echo $args['before_widget'];

        $html  = '<div class="col-sm-6 col-md-6 p-0 bg-img-cover" data-bg-img="'.$fotolateral.'"></div>';

        echo $html;

        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
  register_widget('FotoQuadroLateral_Widget');
});

 ?>