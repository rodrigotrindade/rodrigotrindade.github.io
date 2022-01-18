<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   05-11-2019 21:21:26
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-11-2019 21:22:07
 */
/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Slider_Mosaic_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'slider-mosaic-widget',
            'description' => 'Widget para mostrar sliders do tipo mosaico.'
        );
        
        parent::__construct('slider_mosaic','&nbsp;Slider Mosaico',$widget_ops);
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
            'post_type' => 'slider', 
            'posts_per_page' => -1,
            'meta_key' => '_Z_slider_ordem',
            'tax_query' => array(
               array(
                 'taxonomy' => 'categoriasslider',
                 'field'    => 'slug',
                 'terms'    => $categoria,
               ),
            ),

            'post_status' => 'publish',
            'orderby' => 'meta_value_num',  
            'order' => 'ASC'

        );

        $loop = new WP_Query( $args );

        $html = '';
        $html .= '<section class="zerogrid-section">';
        $html .= '  <div class="container-fluid">';
        $html .= '      <div class="row">';
        $html .= '          <div class="col-md-12 col-xs-12 col-sm-12">';
        $html .= '              <div class="zerogrid">';
        $html .= '                  <div class="row">';

        $quadro1 = "";
        $quadro2 = "";
        $quadro3 = "";
        $quadro4 = "";
        $quadro5 = "";

        // PREENCHE COM A IMAGEM PADRÃO PARA O CASO DE NÃO HAVER SLIDES
        for($i=1;$i<=5;$i++):
        ${"quadro" . $i}  = '<div class="wrap-col criterioMosaico">';
        ${"quadro" . $i} .= '   <div class="grid-item">';
        ${"quadro" . $i} .= '       <div class="post-content">';
        ${"quadro" . $i} .= '           <div class="catname"></div>';
        ${"quadro" . $i} .= '           <h5></h5>';
        ${"quadro" . $i} .= '       </div>';
        ${"quadro" . $i} .= '       <div class="post-thumb"> <img alt="" src="' . get_template_directory_uri() . '/images/slider/slide-15.jpg"> </div>';
        ${"quadro" . $i} .= '   </div>';
        ${"quadro" . $i} .= '</div>';
        endfor;
        
        $i = 0;
        while ( $loop->have_posts() ) : 
            $loop->the_post();
            global $post;
            $custom = get_post_custom();

            $criterio = "";

            if(!empty(get_the_terms($post->ID,"criterio_slider"))):
                foreach(get_the_terms($post->ID,"criterio_slider") as $term):
                   $criterio .= $term->slug . " ";
                endforeach;
            endif;

            if(intval($custom["_Z_slider_ordem"][0]) > 5 || empty($custom["_Z_slider_ordem"][0])) continue;

            if ( has_post_thumbnail() ):
                $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-mosaic' )[0];

                $tag_ou_cat = '';

                $myTags = get_the_terms(get_the_ID(),"slide_tag");

                if(empty($myTags)) $myTags = array();

                foreach($myTags as $term):
                   $cor = ($term->description == '') ? 'red' : $term->description;
                   $tag_ou_cat .= '<span class="tags-mosaico btn btn-' . $cor . '"><div>'. $term->name . '</div></span>';
                endforeach;

        // ----------------------------------------------------------
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

        ${"quadro" . $custom["_Z_slider_ordem"][0]} = '<div class="wrap-col criterioMosaico ' . $criterio . '">';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '   <div class="grid-item">';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '       <div class="post-content">';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           <div class="catname">';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .=                  $tag_ou_cat;
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           </div>';

        if(!empty($custom["_Z_slider_link"][0])):
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           <h5> <a href="' . $custom["_Z_slider_link"][0] . '" target="_blank"  title="Saiba mais...">' . get_the_title() . '</a> </h5>';
        else:
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           <h5>' . get_the_title() . '</h5>';
        endif;

        // ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           <ul class="post-tools">';
        // ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '               <li>' . date("d/m/Y",strtotime(get_the_date())) . '</li>';
        // ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '           </ul>';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '       </div>';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '       <div class="post-thumb"> <img alt="" src="' . $img . '"> </div>';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '   </div>';
        ${"quadro" . $custom["_Z_slider_ordem"][0]} .= '</div>';

        // ---------------------------------------------------------- 

               wp_reset_query();
            endif;
        endwhile;

        $html .= '                      <div class="col-2-4">' . $quadro1 . '</div>';
        $html .= '                      <div class="col-1-4">' . $quadro2 . $quadro3  . '</div>';
        $html .= '                      <div class="col-1-4">' . $quadro4 . $quadro5 . '</div>';

        $html .= '                  </div>';
        $html .= '              </div>';
        $html .= '          </div>';
        $html .= '      </div>';
        $html .= '  </div>';
        $html .= '</section>';

        echo $html;

        echo $args['after_widget'];

        wp_add_inline_script( 'script', 'sliderMosaico();' );
    }

}

add_action( 'widgets_init', function(){
register_widget('Slider_Mosaic_Widget');
});

 ?>