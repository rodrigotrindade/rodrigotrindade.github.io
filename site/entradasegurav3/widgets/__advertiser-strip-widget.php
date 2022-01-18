<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   30-05-2019 00:10:25
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-06-2019 22:51:22
 */
?>
<?php

class AdvertiserStrip_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'advertiser-strip-widget',
            'description' => 'Widget para mostrar anúncios na tira horizontal.'
        );
        
        parent::__construct('advertiser','<span>&nbsp;Tira Horizontal</span>',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['categoria']) ? $categoria = $instance['categoria'] : '';
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('categoria'); ?>"><?php _e('Categoria:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('categoria'); ?>" name="<?php echo $this->get_field_name('categoria'); ?>" type="text" value="<?php echo esc_attr($categoria); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['categoria'] = (!empty($new_instance['categoria']) ) ? strip_tags($new_instance['categoria']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $categoria = $instance['categoria'];
 
        echo $args['before_widget'];

        $args = array( 
            'post_type' => 'advertiser', 
            'posts_per_page' => '-1',
            'tax_query' => array(
               array(
                 'taxonomy' => 'categoriastiras',
                 'field'    => 'slug',
                 'terms'    => $categoria,
               ),
            ),
            'post_status' => 'publish',
            'orderby' => 'rand'

        );
        $loop = new WP_Query( $args );

        $html = '<div class="photo-gallery-slider owl-carousel owl-theme">';
        
        $i = 0;
        while ( $loop->have_posts() ) : 
          $loop->the_post();
          global $post;
        
          if ( has_post_thumbnail() ):
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'advertiser' )[0];

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html .= '<div class="item tira">';
            $html .= '  <a href="' . get_the_permalink() . '"><img alt="" class="img-responsive" src="' . $img . '"></a>';
            $html .= '</div>';

        /* ---------------------------------------------------------- */

               wp_reset_query();
            endif;
        endwhile;
            
        $html .= '   </div>';

        echo $html;

        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
register_widget('AdvertiserStrip_Widget');
});

 ?>