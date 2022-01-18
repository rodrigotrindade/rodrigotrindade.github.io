<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Anuncios_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'anuncios-widget',
            'description' => 'Widget para mostrar anúncios no banner.'
        );
        
        parent::__construct('anuncios','<span>&nbsp;Anúncios</span>',$widget_ops);
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
            'post_type' => 'anuncio', 
            'posts_per_page' => -1,
            'meta_key' => '_Z_anuncio_ordem',
            'tax_query' => array(
               array(
                 'taxonomy' => 'categoriasanuncios',
                 'field'    => 'slug',
                 'terms'    => $categoria,
               ),
            ),

            'post_status' => 'publish',
            'orderby' => 'meta_value_num',  
            'order' => 'ASC'

        );
        $loop = new WP_Query( $args );

        $html = '<div class="news-ticker-block">';
        $html .= '   <div class="breakingNews" id="' . $categoria . '">';
        $html .= '      <ul>';
        
        $i = 0;
        while ( $loop->have_posts() ) : 
            $loop->the_post();
            global $post;
            $custom = get_post_custom();

            $criterio = "";

            if(!empty(get_the_terms($post->ID,"criterio_anuncio"))):
                foreach(get_the_terms($post->ID,"criterio_anuncio") as $term):
                   $criterio .= $term->slug . " ";
                endforeach;
            endif;
              
            if ( has_post_thumbnail() ):
                $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'advertisement' )[0];

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html .= '<li class="criterio ' . $criterio . '">';
            $html .= '    <div class="advertisement">';

if($custom["_Z_anuncio_link"][0] != ""):
            $html .= '        <a href="' . $custom["_Z_anuncio_link"][0] . '">';
endif;

            $html .= '            <img alt="" src="' . $img . '" class="img-responsive">';

if($custom["_Z_anuncio_link"][0] != ""):
            $html .= '        </a>';
endif; 

            $html .= '    </div>';
            $html .= '</li>';

        /* ---------------------------------------------------------- */

               wp_reset_query();
            endif;
        endwhile;

        $html .= '</ul>';
        $html .= '   </div>';
        $html .= '      </div>';

        echo $html;

        echo $args['after_widget'];

        wp_add_inline_script( 'script', 'vaiAnuncio("' . $categoria . '");' );
    }

}

add_action( 'widgets_init', function(){
register_widget('Anuncios_Widget');
});

 ?>