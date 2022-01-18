<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   11-04-2019 00:04:58
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-11-2019 21:23:10
 */
?>
<?php

class Slider_Multiple_Gallery_Widget extends WP_Widget { 
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'slider-multiple-gallery-widget',
            'description' => 'Widget para mostrar sliders do tipo múltiplas fotos por página. Por padrão utilizamos este slider no sitelink, onde as fotos são obtidas a partir de uma galeria.'
        );
        
        parent::__construct('slider_multiple_gallery','&nbsp;Slider Múltiplo Galeria',$widget_ops);
    }

    public function form($instance) {
        isset($instance['num']) ? $num = $instance['num'] : '';
        isset($instance['dots']) ? $dots = $instance['dots'] : '';
        isset($instance['nav']) ? $nav = $instance['nav'] : '';

        $d = '';
        if($dots == "1") $d = 'checked="checked"';  

        $n = '';
        if($nav == "1") $n = 'checked="checked"';  
        ?>

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
        $instance['num'] = (!empty($new_instance['num']) ) ? strip_tags($new_instance['num']) : '';
        $instance['dots'] = (!empty($new_instance['dots']) ) ? strip_tags($new_instance['dots']) : '';
        $instance['nav'] = (!empty($new_instance['nav']) ) ? strip_tags($new_instance['nav']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $num = $instance['num'];
        $dots = ($instance['dots'] == "1") ? "true" : "false";
        $nav = ($instance['nav'] == "1") ? "true" : "false";
    
        echo $args['before_widget'];

        $custom = get_post_custom();

        $link = $custom["_Z_sitelinks_link"][0];

        $info = (isset($custom["_Z_advertiser_info"][0])) ? $custom["_Z_advertiser_info"][0] : "";

        $content = get_the_content();

        $arr = array();

        if(!empty($content)):
            $content = str_replace('[gallery ids="','',$content);
            $content = str_replace('"]','',$content);

            $arr = explode(',',$content);
        endif;

        $html = '<div class="sitelink-title"><h1>' . get_the_title() . '</h1><h4 class="br w-75">' . $info . '</h4></div>';

        $html .= '<div class="header" id="header">';
        $html .= '  <div class="featured-news-slider">';
        $html .= '      <div class="featured-slider-2 owl-carousel owl-theme">';
        
        for($i=0;$i<sizeof($arr);$i++):

        $img = wp_get_attachment_image_src( $arr[$i], "slider-sitelink")[0];
        $cap = wp_get_attachment_caption( $arr[$i]);

        // ---------------------------------------------------------- 
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html .= '      <div class="item">';
            $html .= '        <div class="post-content">';
            $html .= '           <div class="catname">';
            $html .=                    $tag_ou_cat;
            $html .= '           </div>';

            if(!empty($link)):
            $html .= '           <h5> <a href="' . $link . '" target="_blank">' . $cap. '</a> </h5>';
            else:
            $html .= '           <h5>' . $cap . '</h5>';
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

        endfor;

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
register_widget('Slider_Multiple_Gallery_Widget');
});

 ?>