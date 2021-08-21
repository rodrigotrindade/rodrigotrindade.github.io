<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   05-11-2019 21:24:04
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-11-2019 21:24:16
 */
/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Slider_Multiple_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'slider-multiple-widget',
            'description' => 'Widget para mostrar sliders do tipo múltiplas fotos por página. É visualmente o mesmo do sitelink, porém escolhe-se a uma categoria em vez de galeria.'
        );
        
        parent::__construct('slider_multiple','&nbsp;Slider Múltiplo',$widget_ops);
    }
   
    public function form($instance) {
        isset($instance['categoria']) ? $categoria = $instance['categoria'] : '';
        isset($instance['num']) ? $num = $instance['num'] : '';
        isset($instance['dots']) ? $dots = $instance['dots'] : '';
        isset($instance['nav']) ? $nav = $instance['nav'] : '';

        $d = '';
        if($dots == "1") $d = 'checked="checked"';  

        $n = '';
        if($nav == "1") $n = 'checked="checked"';  
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('categoria'); ?>"><?php _e('Categoria:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('categoria'); ?>" name="<?php echo $this->get_field_name('categoria'); ?>" type="text" value="<?php echo esc_attr($categoria); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('num'); ?>"><?php _e('Num. Itens Página:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('num'); ?>" name="<?php echo $this->get_field_name('num'); ?>" type="text" value="<?php echo esc_attr($num); ?>" >
        </p>
        <p>
            <input class="widefat" id="<?php echo $this->get_field_id('dots'); ?>" name="<?php echo $this->get_field_name('dots'); ?>" type="checkbox" value="<?=$dots?>" <?=$d?>><span style="margin-left: 5px;"><?php _e('Mostrar Bolinhas de Navegação?'); ?></span>
        </p>
        <p>
            <input class="widefat" id="<?php echo $this->get_field_id('nav'); ?>" name="<?php echo $this->get_field_name('nav'); ?>" type="checkbox" value="<?=$nav?>" <?=$n?>><span style="margin-left: 5px;"><?php _e('Mostrar Setas de Navegação?'); ?></span>
        </p>
        <p></p>

        <script>
            $("#<?php echo $this->get_field_id('dots'); ?>,#<?php echo $this->get_field_id('nav'); ?>").unbind("click");
            $("#<?php echo $this->get_field_id('dots'); ?>,#<?php echo $this->get_field_id('nav'); ?>").click(function(){
                if($(this).is(':checked')){
                    $(this).val("1");
                }else{
                    $(this).val("");
                }

            });
        </script>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['categoria'] = (!empty($new_instance['categoria']) ) ? strip_tags($new_instance['categoria']) : '';
        $instance['num'] = (!empty($new_instance['num']) ) ? strip_tags($new_instance['num']) : '';
        $instance['dots'] = (!empty($new_instance['dots']) ) ? strip_tags($new_instance['dots']) : '';
        $instance['nav'] = (!empty($new_instance['nav']) ) ? strip_tags($new_instance['nav']) : '';

        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $categoria = $instance['categoria'];
        $num = $instance['num'];
        $dots = ($instance['dots'] == "1") ? "true" : "false";
        $nav = ($instance['nav'] == "1") ? "true" : "false";
 
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
        $html .= '<div class="header" id="header">';
        $html .= '  <div class="featured-news-slider">';
        $html .= '      <div class="featured-slider-2 owl-carousel owl-theme">';
        
        $i = 0;
        while ( $loop->have_posts() ) : 
            $loop->the_post();
            global $post;
            $custom = get_post_custom();

            if ( has_post_thumbnail() ):
                $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-sitelink' )[0];

                $tag_ou_cat = '';

                $myTags = get_the_tags();

                if(empty($myTags)) $myTags = array();

                foreach($myTags as $term):
                   $cor = ($term->description == '') ? 'red' : $term->description;
                   $tag_ou_cat .= '<span class="tags-multiple btn btn-' . $cor . '"><div>'. $term->name . '</div></span>';
                endforeach;

        // ---------------------------------------------------------- 
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html .= '      <div class="item">';
            $html .= '        <div class="post-content">';
            $html .= '           <div class="catname">';
            $html .=                    $tag_ou_cat;
            $html .= '           </div>';

            if(!empty($custom["_Z_slider_link"][0])):
            $html .= '           <h5> <a href="' . $custom["_Z_slider_link"][0] . '" target="_blank">' . get_the_title() . '</a> </h5>';
            else:
            $html .= '           <h5>' . get_the_title() . '</h5>';
            endif;
            // $html .= '           <ul class="post-tools">';
            // $html .= '              <li>' . date("d/m/Y",strtotime(get_the_date())) . '</li>';
            // $html .= '           </ul>';
            $html .= '        </div>';
            $html .= '        <div class="post-thumb"> <a href=""><img alt="" src="' . $img . '"></a> </div>';
            $html .= '        <div class="hover-show-div hidden-xs">';
            // $html .= '           <a href="" class="post-type">';
            // $html .= '           <i class="ti-music-alt"></i>';
            // $html .= '           </a>';
            $html .= '        </div>';
            $html .= '      </div>';

        // ----------------------------------------------------------

               wp_reset_query();
            endif;
        endwhile;

        $html .= '      </div>';
        $html .= '  </div>';
        $html .= '</div>';

        echo $html;

        echo $args['after_widget'];

        $opts = '{num:"' . $num . '",dots:' . $dots . ',nav:' . $nav . '}';

        wp_add_inline_script( 'script', 'sliderSitelink(' . $opts . ');' );
    }

}

add_action( 'widgets_init', function(){
register_widget('Slider_Multiple_Widget');
});

 ?>