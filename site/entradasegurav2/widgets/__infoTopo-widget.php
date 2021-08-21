<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Info2Linhas_widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'info2linhas-widget',
            'description' => 'Widget para mostrar duas linhas de informações.'
        );
        
        parent::__construct('info2linhas','&nbsp;Informações',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['linha1_info']) ? $linha1_info = $instance['linha1_info'] : '';
        isset($instance['linha2_info']) ? $linha2_info = $instance['linha2_info'] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('linha1_info'); ?>"><?php _e('Linha 1:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linha1_info'); ?>" name="<?php echo $this->get_field_name('linha1_info'); ?>" type="text" value="<?php echo esc_attr($linha1_info); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linha2_info'); ?>"><?php _e('Linha 2:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linha2_info'); ?>" name="<?php echo $this->get_field_name('linha2_info'); ?>" type="text" value="<?php echo esc_attr($linha2_info); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['linha1_info'] = (!empty($new_instance['linha1_info']) ) ? strip_tags($new_instance['linha1_info']) : '';
        $instance['linha2_info'] = (!empty($new_instance['linha2_info']) ) ? strip_tags($new_instance['linha2_info']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        isset($instance['linha1_info']) ? $linha1_info = $instance['linha1_info'] : null;
        empty($instance['linha1_info']) ? $linha1_info = '' : null;
        isset($instance['linha2_info']) ? $linha2_info = $instance['linha2_info'] : null;
        empty($instance['linha2_info']) ? $linha2_info = '' : null;

        echo $args['before_widget'];

        $html = '';

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

        $html .= '<p>'.$linha1_info.'<br><span>'.$linha2_info.'</span></p>';

        /* ---------------------------------------------------------- */

        echo $html;

        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
register_widget('Info2Linhas_widget');
});

 ?>