<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   05-11-2019 21:18:51
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-11-2019 21:19:37
 */
/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Sitelinks_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'sitelinks-widget',
            'description' => 'Widget para mostrar sitelinks na barra lateral.'
        );
        
        parent::__construct('sitelinks','<span>&nbsp;Sitelinks</span>',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['categoria']) ? $categoria = $instance['categoria'] : '';
        isset($instance['qtd_pagina']) ? $qtd_pagina = $instance['qtd_pagina'] : '';
        empty($instance['qtd_pagina']) ? $qtd_pagina = 20 : null;
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Patrocinadores' : null;
        isset($instance['max_phone_card']) ? $max_phone_card = $instance['max_phone_card'] : '';
        empty($instance['max_phone_card']) ? $max_phone_card = 2 : null;
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('qtd_pagina'); ?>"><?php _e('Qtd. na Página:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('qtd_pagina'); ?>" name="<?php echo $this->get_field_name('qtd_pagina'); ?>" type="text" value="<?php echo esc_attr($qtd_pagina); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('categoria'); ?>"><?php _e('Categoria:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('categoria'); ?>" name="<?php echo $this->get_field_name('categoria'); ?>" type="text" value="<?php echo esc_attr($categoria); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('max_phone_card'); ?>"><?php _e('Máx. Telefones Anúncio:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('max_phone_card'); ?>" name="<?php echo $this->get_field_name('max_phone_card'); ?>" type="text" value="<?php echo esc_attr($max_phone_card); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['categoria'] = (!empty($new_instance['categoria']) ) ? strip_tags($new_instance['categoria']) : '';
        $instance['qtd_pagina'] = (!empty($new_instance['qtd_pagina']) ) ? strip_tags($new_instance['qtd_pagina']) : '';
        $instance['max_phone_card'] = (!empty($new_instance['max_phone_card']) ) ? strip_tags($new_instance['max_phone_card']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $title = $instance['title'];
        $categoria = $instance['categoria'];
        $qtd_pagina = $instance['qtd_pagina'];
        $max_phone_card = $instance['max_phone_card'];
 
        echo $args['before_widget'];

        $args = array( 
            'post_type' => 'sitelinks', 
            'posts_per_page' => $qtd_pagina,
            'tax_query' => array(
               array(
                 'taxonomy' => 'categoriasitelink',
                 'field'    => 'slug',
                 'terms'    => $categoria,
               ),
            ),

            'post_status' => 'publish',
            'orderby' => 'rand'

        );
        $loop = new WP_Query( $args );

        $html = '<div class="widget widget-bg">';

        $html .= '<div class="heading">';
        $html .= '  <h2 class="main-heading">' . $title . '</h2>';
        $html .= '  <span class="heading-ping"></span>';
        $html .= '</div>';

        $html .= '<div class="tabs patrocinadores">';
        $html .= '  <div role="tabpanel">';
        $html .= '     <div class="tab-content">';
        $html .= '        <div class="tab-pane active" id="popular" role="tabpanel">';
        $html .= '           <ul class="tabs-posts">';
        
        $i = 0;
        while ( $loop->have_posts() ) : 
          $loop->the_post();
          global $post;
          $custom = get_post_custom();

          $criterio = "";

            if(!empty(get_the_terms($post->ID,"criterio_sitelink"))):
                foreach(get_the_terms($post->ID,"criterio_sitelink") as $term):
                   $criterio .= $term->slug . " ";
                endforeach;
            endif;

          $telefones = $custom["_Z_sitelinks_telefones"][0];

          if(strpos($telefones,"|") > 0):
            $exp = explode("|",$telefones);

            $telefones = "";
            $j=0;
            foreach($exp as $phone):
              if($j < $max_phone_card):
                if(strpos($phone,"*"))
                  $telefones .= '<li><i class="fa fa-whatsapp fa-sitelink"></i>' . str_replace("*","",$phone) . '</li>';
                else
                  $telefones .= '<li><i class="fa fa-phone fa-sitelink"></i>' . $phone . '</li>';
              endif;
              $j++;
            endforeach;
          else:
            if(strpos($telefones,"*"))
              $telefones = '<li><i class="fa fa-whatsapp fa-sitelink"></i>' . str_replace("*","",$telefones) . '</li>';
            else
              $telefones = '<li><i class="fa fa-phone fa-sitelink"></i>' . $telefones . '</li>';
          endif;

        
          if ( has_post_thumbnail() ):
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sitelink-thumb' )[0];

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html .= '<li class="stlk criterioSitelink ' . $criterio . '">';
            $html .= '   <div class="pic"> <a href="' . get_the_permalink() . '" target="_blank"><img alt="" class="img-responsive" src="' . $img . '"></a> </div>';
            $html .= '   <div class="caption"> <a href="' . get_the_permalink() . '" target="_blank">' . get_the_title() . '</a> </div>';
            $html .= '   <ul>' . $telefones . '</ul>';
            $html .= '</li>';

        /* ---------------------------------------------------------- */

               wp_reset_query();
            endif;
        endwhile;

        
        $html .= '                </ul>';
        $html .= '            </div>';
        $html .= '         </div>';
        $html .= '      </div>';
        $html .= '   </div>';
            
        $html .= '   </div>';

        echo $html;

        echo $args['after_widget'];

        wp_add_inline_script( 'script', 'criterioSitelink();' );
    }

}

add_action( 'widgets_init', function(){
register_widget('Sitelinks_Widget');
});

 ?>