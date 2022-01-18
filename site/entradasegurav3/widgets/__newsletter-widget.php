<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Newsletter_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'newsletter-widget',
            'description' => 'Widget para mostrar uma caixa para assinar a newsletter do site.'
        );
        
        parent::__construct('newsletter','&nbsp;Newsletter',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['titulo_newsletter']) ? $titulo = $instance['titulo_newsletter'] : '';
        isset($instance['texto_newsletter']) ? $texto = $instance['texto_newsletter'] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('titulo_newsletter'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('titulo_newsletter'); ?>" name="<?php echo $this->get_field_name('titulo_newsletter'); ?>" type="text" value="<?php echo esc_attr($titulo); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('texto_newsletter'); ?>"><?php _e('Texto:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('texto_newsletter'); ?>" name="<?php echo $this->get_field_name('texto_newsletter'); ?>" type="text" value="<?php echo esc_attr($texto); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['titulo_newsletter'] = (!empty($new_instance['titulo_newsletter']) ) ? strip_tags($new_instance['titulo_newsletter']) : '';
        $instance['texto_newsletter'] = (!empty($new_instance['texto_newsletter']) ) ? strip_tags($new_instance['texto_newsletter']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        isset($instance['titulo_newsletter']) ? $title = $instance['titulo_newsletter'] : null;
        empty($instance['titulo_newsletter']) ? $title = '' : null;
        isset($instance['texto_newsletter']) ? $text = $instance['texto_newsletter'] : null;
        empty($instance['texto_newsletter']) ? $text = '' : null;

        echo $args['before_widget'];

        $html = '';

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

        $html .= '<div class="widget widget-bg rss-widget">';
        $html .= '   <div class="heading">';
        $html .= '      <h2 class="main-heading">' . $title . '</h2>';
        $html .= '      <span class="heading-ping"></span>';
        $html .= '   </div>';
        $html .= '   <div class="newsletter">';
        $html .= '      <form class="form-inline" do_action("anr_captcha_form_field")>';
        $html .= '         <div class="form-group">';
        $html .= '            <input type="email" class="form-control" id="campoNewsletter" placeholder="digite seu e-mail">';
        $html .= '         </div>';
        $html .= '         <button id="newsletter" type="submit" class="btn btn-default"><i class="ti-angle-right"></i></button>';
        $html .= '      </form>';
        $html .= '      <p>' . $text . '</p>';
        $html .= '   </div>';
        $html .= '</div>';

        /* ---------------------------------------------------------- */

        echo $html;

        echo $args['after_widget'];

        wp_add_inline_script( 'script', 'vaiNewsletter();' );
    }

}

add_action( 'widgets_init', function(){
register_widget('Newsletter_Widget');
});

 ?>